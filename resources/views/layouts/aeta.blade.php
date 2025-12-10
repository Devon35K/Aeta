<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aeta Heritage Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f1683a',
                        secondary: '#ff8c66',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up { animation: fadeInUp 0.8s ease-out; }
        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .nav-glass {
            background: rgba(55, 65, 81, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .filter-active {
            background-image: linear-gradient(to right, #f1683a, #ff8c66);
            color: #fff;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 min-h-screen font-sans">
    <!-- Top Navigation (Home only) -->
    <nav class="fixed top-0 inset-x-0 z-30 nav-glass">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="flex items-center space-x-2">
                    <span class="text-xl font-bold text-white">
                        <span class="text-primary">Aeta</span> Heritage
                    </span>
                </a>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-gray-200 hover:text-white font-medium transition-colors">Home</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-24">
        <!-- Hero -->
        <section class="relative pb-12 px-4 overflow-hidden">
            <div class="max-w-6xl mx-auto text-center fade-in-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Aeta Heritage Gallery</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-4">
                    Visual Journey Through Aeta Culture
                </p>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Explore our collection of images documenting Aeta traditions, clothing, crafts, landscapes, celebrations, and musical heritage.
                </p>
            </div>
        </section>

        <!-- Filters -->
        <section class="pb-4 px-4">
            <div class="max-w-6xl mx-auto fade-in-up">
                <div class="flex flex-wrap gap-3 justify-center">
                    <button data-filter="all" class="gallery-filter filter-active px-4 py-2 rounded-full text-sm font-semibold bg-white shadow hover-lift border border-gray-200">All</button>
                    <button data-filter="clothing" class="gallery-filter px-4 py-2 rounded-full text-sm font-semibold bg-white shadow hover-lift border border-gray-200">Clothing & Ornaments</button>
                    <button data-filter="crafts" class="gallery-filter px-4 py-2 rounded-full text-sm font-semibold bg-white shadow hover-lift border border-gray-200">Traditional Crafts</button>
                    <button data-filter="landscapes" class="gallery-filter px-4 py-2 rounded-full text-sm font-semibold bg-white shadow hover-lift border border-gray-200">Landscapes</button>
                    <button data-filter="celebrations" class="gallery-filter px-4 py-2 rounded-full text-sm font-semibold bg-white shadow hover-lift border border-gray-200">Celebrations</button>
                    <button data-filter="arts" class="gallery-filter px-4 py-2 rounded-full text-sm font-semibold bg-white shadow hover-lift border border-gray-200">Arts & Instruments</button>
                </div>
            </div>
        </section>

        <!-- Gallery Grid -->
        <section class="py-8 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Clothing & Ornaments -->
                    <div class="gallery-item hover-lift fade-in-up" data-category="clothing">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-amber-200 to-amber-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">👕</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Traditional Clothing</h3>
                                <p class="text-gray-600 text-sm flex-1">Traditional cloth with intricate woven patterns that reflect Aeta identity and community heritage.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-amber-700 bg-amber-50 px-3 py-1 rounded-full w-max">Clothing & Ornaments</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="clothing">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-pink-200 to-rose-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">📿</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Beaded Necklaces</h3>
                                <p class="text-gray-600 text-sm flex-1">Handmade beaded necklaces carefully crafted for daily wear and special occasions.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-amber-700 bg-amber-50 px-3 py-1 rounded-full w-max">Clothing & Ornaments</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="clothing">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-red-200 to-orange-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">📿</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Beaded Bracelets</h3>
                                <p class="text-gray-600 text-sm flex-1">Colorful bracelets symbolizing relationships, protection, and cultural expression.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-amber-700 bg-amber-50 px-3 py-1 rounded-full w-max">Clothing & Ornaments</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="clothing">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-yellow-200 to-amber-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">👑</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Ceremonial Headdress</h3>
                                <p class="text-gray-600 text-sm flex-1">Elaborate headpiece worn during rituals, festivals, and important community events.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-amber-700 bg-amber-50 px-3 py-1 rounded-full w-max">Clothing & Ornaments</span>
                            </div>
                        </div>
                    </div>

                    <!-- Traditional Crafts -->
                    <div class="gallery-item hover-lift fade-in-up" data-category="crafts">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-green-200 to-emerald-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🧺</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Woven Baskets</h3>
                                <p class="text-gray-600 text-sm flex-1">Intricately woven baskets made from natural forest materials for carrying harvests and daily tools.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full w-max">Traditional Crafts</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="crafts">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-yellow-200 to-orange-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🔔</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Metalwork</h3>
                                <p class="text-gray-600 text-sm flex-1">Brass bells and ornamental metalwork used for adornment and ceremonial purposes.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-emerald-700 bg-emerald-50 px-3 py-1 rounded-full w-max">Traditional Crafts</span>
                            </div>
                        </div>
                    </div>

                    <!-- Landscapes -->
                    <div class="gallery-item hover-lift fade-in-up" data-category="landscapes">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-blue-200 to-sky-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">⛰️</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Mountain Terrain</h3>
                                <p class="text-gray-600 text-sm flex-1">Ancestral homelands in the mountainous and forested regions where Aeta communities live.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-blue-700 bg-blue-50 px-3 py-1 rounded-full w-max">Landscapes</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="landscapes">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-green-200 to-lime-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🌳</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Rainforest Resources</h3>
                                <p class="text-gray-600 text-sm flex-1">Dense forests rich in biodiversity, providing food, medicine, and materials.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-blue-700 bg-blue-50 px-3 py-1 rounded-full w-max">Landscapes</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="landscapes">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-cyan-200 to-sky-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🏞️</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">River Communities</h3>
                                <p class="text-gray-600 text-sm flex-1">Settlements near rivers that provide water, food, and travel routes.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-blue-700 bg-blue-50 px-3 py-1 rounded-full w-max">Landscapes</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="landscapes">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-amber-200 to-lime-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🌾</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Agricultural Lands</h3>
                                <p class="text-gray-600 text-sm flex-1">Traditional farming areas and upland fields cultivated by Aeta farmers.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-blue-700 bg-blue-50 px-3 py-1 rounded-full w-max">Landscapes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Celebrations -->
                    <div class="gallery-item hover-lift fade-in-up" data-category="celebrations">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-purple-200 to-fuchsia-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🎶</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Festival Music</h3>
                                <p class="text-gray-600 text-sm flex-1">Traditional musicians performing at community celebrations and rituals.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-purple-700 bg-purple-50 px-3 py-1 rounded-full w-max">Celebrations</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="celebrations">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-orange-200 to-red-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">👥</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Community Gathering</h3>
                                <p class="text-gray-600 text-sm flex-1">Aeta families and elders gathered together for cultural events and rituals.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-purple-700 bg-purple-50 px-3 py-1 rounded-full w-max">Celebrations</span>
                            </div>
                        </div>
                    </div>

                    <!-- Arts & Instruments -->
                    <div class="gallery-item hover-lift fade-in-up" data-category="arts">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-yellow-200 to-orange-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🥁</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Traditional Drums</h3>
                                <p class="text-gray-600 text-sm flex-1">Percussion instruments that mark rhythm for dances, rituals, and gatherings.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-indigo-700 bg-indigo-50 px-3 py-1 rounded-full w-max">Arts & Instruments</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="arts">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-amber-200 to-yellow-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🎐</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Gong (Agung)</h3>
                                <p class="text-gray-600 text-sm flex-1">Bronze gong producing deep, resonant tones for ceremonies and gatherings.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-indigo-700 bg-indigo-50 px-3 py-1 rounded-full w-max">Arts & Instruments</span>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item hover-lift fade-in-up" data-category="arts">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-full flex flex-col">
                            <div class="bg-gradient-to-br from-teal-200 to-cyan-100 h-40 flex items-center justify-center">
                                <span class="text-5xl">🎼</span>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Bamboo Flute</h3>
                                <p class="text-gray-600 text-sm flex-1">Handmade wind instrument with soft, melodic tones used in traditional music.</p>
                                <span class="mt-3 inline-flex items-center text-xs font-semibold text-indigo-700 bg-indigo-50 px-3 py-1 rounded-full w-max">Arts & Instruments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12 px-4 mt-8">
            <div class="max-w-6xl mx-auto text-center">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-2">
                        <span class="text-primary">Aeta</span> Heritage
                    </h3>
                    <p class="text-gray-400">Honoring the visual stories of the Aeta people of the Philippines.</p>
                </div>
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a>
                    <a href="/mansaka-gallery" class="text-primary">Gallery</a>
                </div>
                <p class="text-gray-400 text-sm">
                    © 2025 Aeta Heritage Gallery. Visual documentation for learning and cultural appreciation.
                </p>
            </div>
        </footer>
    </div>

    <script>
        // Fade-in on scroll
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);
        document.querySelectorAll('section').forEach(section => observer.observe(section));

        // Filter logic
        const filterButtons = document.querySelectorAll('.gallery-filter');
        const items = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.dataset.filter;
                filterButtons.forEach(b => b.classList.remove('filter-active'));
                btn.classList.add('filter-active');

                items.forEach(item => {
                    const category = item.dataset.category;
                    if (filter === 'all' || category === filter) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>
