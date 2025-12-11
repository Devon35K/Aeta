<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livelihood & Economy - Aeta People</title>
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
        /* Animations reused from historical-journey */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .nav-glass {
            background: rgba(55, 65, 81, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
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

    <!-- Main content wrapper -->
    <div class="pt-24">

        <!-- Hero Section -->
        <section class="relative pb-16 px-4 overflow-hidden">
            <div class="max-w-6xl mx-auto text-center fade-in-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800 mb-6">
                    Aeta <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Livelihood & Economy</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Exploring the traditional and contemporary economic activities of the Aeta people and their resilient connection to ancestral lands.
                </p>
            </div>
        </section>

        <!-- Traditional Subsistence Farming -->
        <section class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Traditional Subsistence Farming</h2>
                    <h3 class="text-2xl text-amber-700 font-semibold mb-4">Centuries of Agricultural Heritage</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        For centuries, the Aeta people have practiced shifting agriculture (kaingin) as their primary livelihood. This sustainable farming method, adapted to mountainous terrain, allows them to live in harmony with their environment while meeting their food and economic needs.
                    </p>

                    <div class="grid md:grid-cols-2 gap-8 mt-10">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800 mb-4">Traditional Crops</h4>
                            <p class="text-gray-600 mb-4">The Aeta cultivate a diverse range of crops suited to their environment:</p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-gray-600">
                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Upland rice</li>
                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Root crops (sweet potatoes, yams)</li>
                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Bananas</li>
                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Mangoes</li>
                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Jackfruit</li>
                                <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Various vegetables</li>
                            </ul>
                        </div>
                        <div class="bg-amber-50 rounded-xl p-6 border border-amber-100">
                            <h4 class="text-xl font-semibold text-amber-800 mb-3">Sustainable Practices</h4>
                            <p class="text-gray-600 mb-4">Aeta agriculture incorporates traditional ecological knowledge:</p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-leaf text-green-500 mt-1 mr-2"></i>
                                    <span>Shifting cultivation to maintain soil fertility</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-seedling text-green-500 mt-1 mr-2"></i>
                                    <span>Intercropping of various plant species</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-tree text-green-500 mt-1 mr-2"></i>
                                    <span>Forest conservation and management</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-recycle text-green-500 mt-1 mr-2"></i>
                                    <span>Use of organic farming methods</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modern Livelihoods & Economic Activities -->
        <section class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Modern Livelihoods & Economic Activities</h2>

                    <div class="grid md:grid-cols-2 gap-8 mb-12">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Traditional Gathering</h3>
                            <p class="text-gray-600 mb-4">Many Aeta communities continue to rely on forest products:</p>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-leaf text-green-500 mt-1 mr-2"></i>
                                    <span>Wild honey and forest fruits</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-spa text-green-500 mt-1 mr-2"></i>
                                    <span>Medicinal plants and herbs</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-bamboo text-green-500 mt-1 mr-2"></i>
                                    <span>Bamboo and rattan for handicrafts</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Contemporary Employment</h3>
                            <p class="text-gray-600 mb-4">Many Aeta have adapted to modern employment opportunities:</p>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-hands-helping text-blue-500 mt-1 mr-2"></i>
                                    <span>Farm labor in nearby plantations</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-building text-blue-500 mt-1 mr-2"></i>
                                    <span>Construction work</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-utensils text-blue-500 mt-1 mr-2"></i>
                                    <span>Service industry jobs</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-graduation-cap text-blue-500 mt-1 mr-2"></i>
                                    <span>Education and healthcare professions</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-amber-50 rounded-xl p-8 border border-amber-100 mt-4">
                        <h3 class="text-2xl font-semibold text-amber-800 mb-4">Cultural Tourism & Handicrafts</h3>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <p class="text-gray-600 mb-4">
                                    Many Aeta communities are developing cultural tourism initiatives and handicraft production as sustainable livelihood options:
                                </p>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <i class="fas fa-hiking text-amber-600 mt-1 mr-2"></i>
                                        <span>Guided nature and cultural tours</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-hands text-amber-600 mt-1 mr-2"></i>
                                        <span>Traditional craft workshops</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-home text-amber-600 mt-1 mr-2"></i>
                                        <span>Homestay programs</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-shopping-bag text-amber-600 mt-1 mr-2"></i>
                                        <span>Handicraft sales (baskets, mats, jewelry)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-white p-4 rounded-lg shadow-inner border border-amber-100">
                                    <p class="text-gray-600 italic">
                                        "Our traditional knowledge of the forest is not just about survivalit's a way of life that we're proud to share with visitors while creating sustainable livelihoods for our community."
                                    </p>
                                    <p class="text-right text-amber-700 font-medium mt-2"> Aeta Community Leader</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Challenges, Resilience & Future -->
        <section class="py-16 px-4 bg-gradient-to-br from-amber-50 to-orange-50">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Challenges & Resilience</h2>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-red-50 p-6 rounded-xl border border-red-100">
                            <h3 class="text-xl font-semibold text-red-800 mb-4">Current Challenges</h3>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <i class="fas fa-exclamation-triangle text-red-500 mt-1 mr-3"></i>
                                    <span>Land dispossession and resource competition</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-tree text-red-500 mt-1 mr-3"></i>
                                    <span>Deforestation and environmental degradation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-hand-holding-usd text-red-500 mt-1 mr-3"></i>
                                    <span>Limited access to markets and fair trade</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-graduation-cap text-red-500 mt-1 mr-3"></i>
                                    <span>Educational and economic disparities</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-green-50 p-6 rounded-xl border border-green-100">
                            <h3 class="text-xl font-semibold text-green-800 mb-4">Community Resilience</h3>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <i class="fas fa-hands-helping text-green-600 mt-1 mr-3"></i>
                                    <span>Strong community organizations and cooperatives</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-seedling text-green-600 mt-1 mr-3"></i>
                                    <span>Sustainable agriculture initiatives</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-book text-green-600 mt-1 mr-3"></i>
                                    <span>Cultural education and language preservation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-hands text-green-600 mt-1 mr-3"></i>
                                    <span>Youth leadership and skills training</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-8 rounded-xl border border-blue-100">
                        <h3 class="text-2xl font-semibold text-blue-800 mb-4">Looking to the Future</h3>
                        <p class="text-gray-700 mb-6">
                            The Aeta people continue to navigate the challenges of modernization while preserving their cultural heritage. By combining traditional knowledge with new opportunities, they are building sustainable livelihoods that honor their past while securing their future.
                        </p>
                       
                   
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12 px-4 mt-12">
            <div class="max-w-6xl mx-auto text-center">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-2">
                        <span class="text-primary">Aeta</span> Heritage
                    </h3>
                    <p class="text-gray-400">Preserving the livelihood, culture, and history of the Aeta people.</p>
                </div>
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a>
                    <a href="/traditions-culture" class="text-gray-400 hover:text-white transition-colors">Culture</a>
                    <a href="/historical-journey" class="text-gray-400 hover:text-white transition-colors">Historical Journey</a>
                    <a href="/livelihood" class="text-primary">Livelihood & Economy</a>
                </div>
                <p class="text-gray-400 text-sm">
                    © 2025 Aeta Heritage. Dedicated to sharing the resilience and stories of the Aeta people.
                </p>
            </div>
        </footer>
    </div>

    <script>
        // Simple fade-in on scroll like in historical-journey
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
