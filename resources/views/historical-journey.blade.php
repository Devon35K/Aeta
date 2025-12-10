<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historical Journey - Aeta People</title>
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
        /* Custom animations */
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
        
        /* Scroll indicator */
        .scroll-indicator {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        /* Timeline styles */
        .timeline-line {
            background: linear-gradient(180deg, #f1683a 0%, #ff8c66 100%);
        }
        
        .timeline-dot {
            background: #f1683a;
            border: 4px solid #fff;
            box-shadow: 0 0 0 4px rgba(241, 104, 58, 0.2);
        }
        
        /* Hover effects */
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        /* Navigation glass styles */
        .nav-glass {
            background: rgba(55, 65, 81, 0.75);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .mobile-menu-glass {
            background: rgba(55, 65, 81, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 min-h-screen">
    <!-- Top Navigation -->
    @include('components.navigation-with-history')

    <!-- Main content wrapper -->
    <div>

    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 px-4 overflow-hidden">
        <div class="max-w-6xl mx-auto text-center fade-in-up">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
                Historical <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Journey</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Discover the rich heritage and ancient origins of the Aeta people, the first inhabitants of the Philippine archipelago
            </p>
            <div class="scroll-indicator text-primary">
                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Historical Background -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Historical Background</h2>
                <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                    <p>
                        The Aeta people have inhabited the mountainous regions of the Philippines for over 30,000 years, making them among the earliest inhabitants of the archipelago. Their history is intertwined with the broader narrative of Philippine indigenous peoples, known collectively as Negritos, who predate all other settlements in the Philippines.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">Aeta Through the Ages</h2>
            
            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full timeline-line"></div>
                
                <!-- Timeline items -->
                <div class="space-y-12">
                    <!-- Pre-Colonial Era -->
                    <div class="relative flex items-center">
                        <div class="w-full md:w-1/2 md:pr-8 text-right">
                            <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                                <div class="text-primary font-semibold mb-2">30,000+ Years Ago</div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Ancient Aeta Civilization</h3>
                                <p class="text-gray-600">
                                    The first Aeta people arrived via land bridges during the Ice Age, developing sophisticated hunting techniques, spiritual practices, and knowledge systems deeply connected to the forest ecosystem.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 timeline-dot rounded-full"></div>
                        <div class="w-full md:w-1/2 md:pl-8"></div>
                    </div>

                    <!-- Pre-Colonial Period -->
                    <div class="relative flex items-center">
                        <div class="w-full md:w-1/2 md:pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 timeline-dot rounded-full"></div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                                <div class="text-primary font-semibold mb-2">Pre-1565</div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Pre-Colonial Era</h3>
                                <p class="text-gray-600">
                                    Long before Spanish colonization, the Aeta developed complex social structures, governance systems, and sustainable resource management. They established trade networks with neighboring communities and maintained deep spiritual connections to their ancestral lands.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Spanish Colonial Period -->
                    <div class="relative flex items-center">
                        <div class="w-full md:w-1/2 md:pr-8 text-right">
                            <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                                <div class="text-primary font-semibold mb-2">1565-1898</div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Spanish Colonial Period</h3>
                                <p class="text-gray-600">
                                    During Spanish colonization, the Aeta resisted foreign rule and maintained their autonomy in remote mountain areas. The difficult terrain served as both refuge and protective barrier, allowing them to preserve their cultural identity and traditional practices.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 timeline-dot rounded-full"></div>
                        <div class="w-full md:w-1/2 md:pl-8"></div>
                    </div>

                    <!-- American Colonial Era -->
                    <div class="relative flex items-center">
                        <div class="w-full md:w-1/2 md:pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 timeline-dot rounded-full"></div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                                <div class="text-primary font-semibold mb-2">1898-1946</div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">American Colonial Era</h3>
                                <p class="text-gray-600">
                                    The Aeta continued cultural preservation while facing new external pressures. American authorities attempted to integrate them into colonial society, but many communities maintained their traditional way of life in the highlands.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Modern Era -->
                    <div class="relative flex items-center">
                        <div class="w-full md:w-1/2 md:pr-8 text-right">
                            <div class="bg-white rounded-xl shadow-lg p-6 hover-lift">
                                <div class="text-primary font-semibold mb-2">1946-Present</div>
                                <h3 class="text-xl font-bold text-gray-800 mb-3">Modern Philippines</h3>
                                <p class="text-gray-600">
                                    Today, the Aeta continue navigating modern Philippine society while striving to maintain their cultural heritage. They've established educational programs, cultural organizations, and advocacy groups to ensure the survival of their traditions and language.
                                </p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 timeline-dot rounded-full"></div>
                        <div class="w-full md:w-1/2 md:pl-8"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Meaning of "Aeta" -->
    <section class="py-16 px-4 bg-gradient-to-br from-primary/5 to-secondary/5">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">The Meaning of "Aeta"</h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 text-center hover-lift">
                    <div class="text-4xl mb-4">🌍</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Ancient Origins</h3>
                    <p class="text-gray-600">
                        The term "Aeta" is believed to derive from ancient words meaning "first" or "original," indicating their status as the earliest inhabitants of the Philippine archipelago.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 text-center hover-lift">
                    <div class="text-4xl mb-4">🏔️</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Mountain Dwellers</h3>
                    <p class="text-gray-600">
                        Aeta are traditionally highland dwellers, with their name often associated with mountainous regions and their intimate connection to elevated forest ecosystems.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 text-center hover-lift">
                    <div class="text-4xl mb-4">👥</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Cultural Identity</h3>
                    <p class="text-gray-600">
                        The name encompasses their unique cultural identity, distinct physical characteristics, and their role as guardians of ancestral forest knowledge.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Population & Distribution -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Population & Geographic Distribution</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Primary Homeland</h3>
                        <p class="text-gray-600 mb-6">
                            The Aeta primarily inhabit the mountainous regions of Luzon, with significant populations in Zambales, Tarlac, Pampanga, Bicol Region, and the Sierra Madre mountain range. These forested highlands represent their ancestral and cultural heartland.
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Population Estimates</h3>
                        <p class="text-gray-600">
                            Current estimates suggest between 20,000-50,000 Aeta people remain in the Philippines, though exact numbers are difficult to determine due to remote locations and varying degrees of integration with mainstream society.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Traditional Living</h3>
                        <p class="text-gray-600 mb-6">
                            Many Aeta communities continue to live in rural villages, maintaining traditional practices in hunting, gathering, and swidden farming. Their deep knowledge of forest ecosystems remains central to their cultural identity.
                        </p>
                        
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Modern Adaptation</h3>
                        <p class="text-gray-600">
                            Some Aeta have migrated to urban areas for education and employment, yet most maintain strong ties to their ancestral villages and participate regularly in cultural events and traditional practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Cultural Values -->
    <section class="py-16 px-4 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">Key Cultural Values</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🤝</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Community & Kinship</h3>
                    <p class="text-gray-600">Strong family bonds and communal responsibility form the foundation of Aeta society.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🌿</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Harmony with Nature</h3>
                    <p class="text-gray-600">Sustainable resource management and spiritual connection to the land guide their practices.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">📖</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Oral Tradition</h3>
                    <p class="text-gray-600">Cultural knowledge is preserved through storytelling and direct teaching by elders.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🙏</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Spiritual Beliefs</h3>
                    <p class="text-gray-600">Indigenous spiritual practices and respect for ancestral spirits influence daily life.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">⚖️</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Equity & Justice</h3>
                    <p class="text-gray-600">Traditional governance emphasizes fairness and consensus-building in conflict resolution.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🛡️</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Cultural Preservation</h3>
                    <p class="text-gray-600">Maintaining cultural identity, language, and traditions despite modern pressures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold mb-2">
                    <span class="text-primary">Aeta</span> Heritage
                </h3>
                <p class="text-gray-400">Preserving the legacy of the Philippines' first people</p>
            </div>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a>
                <a href="/#culture" class="text-gray-400 hover:text-white transition-colors">Culture</a>
                <a href="/#history" class="text-gray-400 hover:text-white transition-colors">History</a>
                <a href="/historical-journey" class="text-primary">Historical Journey</a>
                <a href="/#geography" class="text-gray-400 hover:text-white transition-colors">Geography</a>
                <a href="/#gallery" class="text-gray-400 hover:text-white transition-colors">Gallery</a>
            </div>
            <p class="text-gray-400 text-sm">
                © 2024 Aeta Heritage. Dedicated to preserving and sharing the rich cultural heritage of the Aeta people.
            </p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            // Toggle the button icons
            const blockSvg = mobileMenuButton.querySelector('.block');
            const hiddenSvg = mobileMenuButton.querySelector('.hidden');
            blockSvg.classList.toggle('hidden');
            hiddenSvg.classList.toggle('hidden');
            blockSvg.classList.toggle('block');
            hiddenSvg.classList.toggle('block');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add fade-in animation on scroll
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

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>
