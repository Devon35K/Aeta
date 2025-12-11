<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $images = [];
        $imageDir = public_path('images');
        
        if (File::exists($imageDir)) {
            $files = File::files($imageDir);
            
            foreach ($files as $file) {
                $extension = strtolower($file->getExtension());
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                    $images[] = [
                        'path' => asset('images/' . $file->getFilename()),
                        'name' => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                        'extension' => $extension
                    ];
                }
            }
        }
        
        $categories = [
            'all' => 'All Images',
            'aeta' => 'Aeta People',
            'culture' => 'Culture',
            'nature' => 'Nature',
            'crafts' => 'Traditional Crafts'
        ];
        
        return view('gallery', compact('images', 'categories'));
    }
}
