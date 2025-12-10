<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class AetChatController extends Controller
{
    /**
     * Lightweight, free demo responder for Aet chatbot.
     * Replace logic with a real AI provider as needed.
     */
    public function reply(Request $request): JsonResponse
    {
        $data = $request->validate([
            'message' => ['required', 'string', 'max:500'],
        ]);

        $message = strtolower($data['message']);
        $answer = $this->craftAnswer($message);

        return response()->json([
            'reply' => $answer,
        ]);
    }

    private function craftAnswer(string $message): string
    {
        $topics = [
            'culture' => 'Aeta culture is rich with music (bamboo instruments, nose flute), dance that mimics daily life, and oral traditions that pass stories across generations.',
            'history' => 'The Aeta are among the earliest inhabitants of the Philippines. They retained traditions through the Spanish era and continue preserving identity amid modern challenges.',
            'geography' => 'Aeta communities are found in Zambales Mountains, Sierra Madre, Bataan, Pampanga/Tarlac, and parts of Bicol—often forested, mountainous regions.',
            'livelihood' => 'Traditional livelihoods include hunting, fishing, gathering wild foods, herbal medicine, and swidden farming. Many also adapt to modern labor while keeping traditions.',
            'language' => 'They speak several distinct languages/dialects; some are endangered and hold vital ecological knowledge and cultural concepts.',
        ];

        foreach ($topics as $keyword => $text) {
            if (str_contains($message, $keyword)) {
                return $text;
            }
        }

        return "I'm Aet! Ask me about culture, history, geography, livelihoods, or language of the Aeta people. I can also point you to sections on this page.";
    }

    /**
     * OpenRouter-backed reply using a free model (deepseek/deepseek-r1:free).
     * Expects OPENROUTER_API_KEY in .env
     */
    public function openRouter(Request $request): JsonResponse
    {
        $data = $request->validate([
            'message' => ['required', 'string', 'max:500'],
        ]);

        $payload = [
            'model' => 'deepseek/deepseek-r1:free',
            'messages' => [
                ['role' => 'system', 'content' => 'You are Aet, a cultural guide for the Aeta people. Answer concisely and helpfully.'],
                ['role' => 'user', 'content' => $data['message']],
            ],
        ];

        try {
            $apiKey = config('services.openrouter.key');
            if (!$apiKey) {
                // No key configured — gracefully fall back to local craftAnswer
                return response()->json(['reply' => $this->craftAnswer($data['message'])]);
            }

            $res = Http::withHeaders([
                'Authorization' => "Bearer {$apiKey}",
                'HTTP-Referer' => url('/'),
                'X-Title' => config('app.name', 'Aeta Heritage'),
            ])->acceptJson()->post('https://openrouter.ai/api/v1/chat/completions', $payload);

            if (!$res->successful()) {
                return response()->json([
                    'reply' => $this->craftAnswer($data['message']),
                    'fallback' => true,
                ], 200);
            }

            $data = $res->json();
            $reply = $data['choices'][0]['message']['content'] ?? 'No response received.';

            return response()->json(['reply' => $reply]);
        } catch (\Throwable $e) {
            return response()->json([
                'reply' => $this->craftAnswer($data['message']),
                'fallback' => true,
            ], 200);
        }
    }
}
