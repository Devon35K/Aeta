<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AetChatController;

Route::post('/aet-chat', [AetChatController::class, 'reply']);
Route::post('/aet-chat/openrouter', [AetChatController::class, 'openRouter']);
