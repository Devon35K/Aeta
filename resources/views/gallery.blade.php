<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeta Gallery</title>
    <link rel="icon" href="{{ asset('images/aetalogo.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gallery-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen bg-gradient-to-br from-[#f5ebe0] via-[#ede8dd] to-[#e8dfd5] py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header with Back Button -->
            <div class="flex justify-between items-center mb-8">
                <a href="/" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Home
                </a>
            </div>
            
            <!-- Gallery Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#2d5016] to-[#3a6b1b] mb-4">Aeta Gallery</h1>
                <div class="w-32 h-1 bg-gradient-to-r from-[#2d5016] to-[#3a6b1b] mx-auto rounded-full mb-8"></div>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="image-grid">
                @foreach($images as $image)
                    @php
                        $imagePath = $image['path'] ?? '';
                        $imageUrlPath = parse_url($imagePath, PHP_URL_PATH);
                        $imageFileName = pathinfo($imageUrlPath ?? $imagePath, PATHINFO_BASENAME);
                        $excludedFiles = ['aetalogo.png', 'playing poop childe.webp', 'aeta girl.webp'];
                    @endphp
                    @if(in_array($imageFileName, $excludedFiles, true))
                        @continue
                    @endif
                    <div class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-white transform hover:-translate-y-1" 
                         data-category="{{ str_contains(strtolower($image['name']), 'aeta') ? 'aeta' : (str_contains(strtolower($image['name']), 'craft') ? 'crafts' : 'all') }}">
                        <div class="relative overflow-hidden h-64">
                            <img src="{{ $image['path'] }}" 
                                 alt="{{ $image['name'] }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                       
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Back to top button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 bg-[#2d5016] text-white p-3 rounded-full shadow-lg hover:bg-[#3a6b1b] transition-colors duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
    </script>
</body>
</html>
