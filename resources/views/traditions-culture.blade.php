<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditions & Culture - Aeta People</title>
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
                Traditions & <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Culture</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                The Living Heritage of the Aeta People
            </p>
            <div class="scroll-indicator text-primary">
                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Traditional Clothing & Ornaments -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Traditional Clothing & Ornaments</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Aeta traditional attire reflects their deep connection to nature and their cultural identity
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Distinctive Design Characteristics</h3>
                    <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                        <p>
                            Aeta traditional clothing is characterized by its simplicity and practicality, designed for their forest-dwelling lifestyle. Their attire typically consists of minimal garments made from natural materials found in their environment.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><strong>Bahag (Loincloth):</strong> Traditional woven cloth worn by men, made from bark fiber or woven plant materials</li>
                            <li><strong>Saya (Skirt):</strong> Simple wraparound skirts worn by women, often made from the same natural fibers</li>
                            <li><strong>Natural Materials:</strong> Clothing crafted from tree bark, palm leaves, and woven grass fibers</li>
                            <li><strong>Earthy Colors:</strong> Natural browns, greens, and earth tones from plant-based dyes</li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Traditional Accessories & Ornaments</h3>
                    <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                        <p>
                            Aeta adornments reflect both aesthetic beauty and cultural significance, with designs that emphasize their connection to nature and tribal identity.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><strong>Shell Jewelry:</strong> Necklaces and bracelets made from seeds, shells, and stones</li>
                            <li><strong>Plant Fiber Adornments:</strong> Woven bracelets and anklets from natural fibers</li>
                            <li><strong>Feather Accessories:</strong> Colorful bird feathers used in ceremonial headdresses</li>
                            <li><strong>Body Art:</strong> Traditional tattoos and temporary body paintings for ceremonies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Native Crafts & Handiwork -->
    <section class="py-16 px-4 bg-gradient-to-br from-primary/5 to-secondary/5">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Native Crafts & Handiwork</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Traditional skills passed down through generations
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover-lift">
                    <div class="text-4xl mb-4">🧺</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Basket Weaving</h3>
                    <p class="text-gray-600">
                        Intricately woven baskets using bamboo, rattan, and natural materials. Used for storage, ceremonies, and daily activities with designs that tell ancestral stories.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover-lift">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Textile Weaving</h3>
                    <p class="text-gray-600">
                        Traditional hand looms produce distinctive patterns and natural colors. Each woven piece represents hours of meticulous craftsmanship and cultural knowledge.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover-lift">
                    <div class="text-4xl mb-4">🔨</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Metalwork</h3>
                    <p class="text-gray-600">
                        Skilled artisans craft tools, weapons, and ceremonial objects. Traditional metalworking techniques have been preserved for creating essential hunting and farming implements.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover-lift">
                    <div class="text-4xl mb-4">🏺</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pottery & Ceramics</h3>
                    <p class="text-gray-600">
                        Hand-formed pottery vessels for cooking and storing food. The distinctive shapes reflect practical needs and artistic expression using clay from riverbeds.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover-lift">
                    <div class="text-4xl mb-4">🗿</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Wood Carving</h3>
                    <p class="text-gray-600">
                        Intricate carvings of figures, masks, and decorative objects from local wood. Often created for ceremonies, spiritual purposes, and storytelling traditions.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover-lift">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Tool & Weapon Making</h3>
                    <p class="text-gray-600">
                        Traditional bows, arrows, and hunting tools crafted with both functional and ceremonial purposes. Decorated with symbolic designs and natural materials.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Music, Instruments & Dance -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Traditional Instruments</h3>
                    <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                        <p>
                            Aeta music is characterized by indigenous instruments that create rhythms tied to their spiritual beliefs and daily activities in the forest.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><strong>Bamboo Zither:</strong> String instrument creating melodic sounds in traditional pieces</li>
                            <li><strong>Nose Flute:</strong> Wind instrument played during ceremonies and storytelling</li>
                            <li><strong>Percussion Instruments:</strong> Drums and rattles made from hollow bamboo and gourds</li>
                            <li><strong>Wooden Clappers:</strong> Used to keep rhythm during dances and rituals</li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 hover-lift">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Traditional Dances</h3>
                    <div class="prose prose-lg max-w-none text-gray-600 space-y-4">
                        <p>
                            Dance is a vital expression of Aeta culture, often performed during celebrations, ceremonies, and important community gatherings.
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><strong>Animal Imitation Dances:</strong> Movements mimicking forest animals and hunting scenes</li>
                            <li><strong>Harvest Celebrations:</strong> Joyful dances performed after successful gathering seasons</li>
                            <li><strong>Ritual Ceremonies:</strong> Sacred dances honoring nature spirits and ancestors</li>
                            <li><strong>Storytelling Dances:</strong> Movements that narrate tribal myths and legends</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Traditional Livelihoods -->
    <section class="py-16 px-4 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Traditional Livelihoods</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Sustainable practices that have sustained Aeta communities for millennia
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🏹</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Hunting & Gathering</h3>
                    <p class="text-gray-600">Traditional hunting using bows and arrows, gathering wild fruits, roots, and medicinal plants from the forest.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🌾</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Swidden Farming</h3>
                    <p class="text-gray-600">Sustainable slash-and-burn agriculture (kaingin) for root crops, vegetables, and grains in forest clearings.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🎣</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Fishing</h3>
                    <p class="text-gray-600">Traditional fishing methods in rivers and streams using bamboo traps and natural techniques.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🌿</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Herbal Medicine</h3>
                    <p class="text-gray-600">Extensive knowledge of medicinal plants and traditional healing practices passed down through generations.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🧵</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Craft Production</h3>
                    <p class="text-gray-600">Creating handwoven textiles, baskets, pottery, and wooden crafts for cultural use and trade.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover-lift">
                    <div class="text-primary text-2xl mb-3">🤝</div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Trading & Commerce</h3>
                    <p class="text-gray-600">Exchange of goods with neighboring communities and participation in local markets for cultural products.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Celebrations & Festivals -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Celebrations & Festivals</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Joyous occasions that strengthen community bonds and cultural identity
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 hover-lift">
                    <div class="text-primary text-3xl mb-4">🌾</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Harvest Festival</h3>
                    <p class="text-gray-600 mb-4">
                        Annual celebration honoring successful crops and the spirits of the land. Features traditional dances, feasting, and gratitude rituals performed by the entire community.
                    </p>
                    <div class="text-sm text-primary font-semibold">Agricultural Cycle</div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 hover-lift">
                    <div class="text-primary text-3xl mb-4">🎓</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Initiation Rites</h3>
                    <p class="text-gray-600 mb-4">
                        Important ceremonies marking transitions from childhood to adulthood. Include spiritual cleansing, guidance from elders, and community recognition of new adults.
                    </p>
                    <div class="text-sm text-primary font-semibold">Life Milestone</div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 hover-lift">
                    <div class="text-primary text-3xl mb-4">💑</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Wedding Ceremonies</h3>
                    <p class="text-gray-600 mb-4">
                        Traditional marriage rituals involving elaborate ceremonies, exchanges of gifts, and blessings from community leaders. Celebrations can last several days.
                    </p>
                    <div class="text-sm text-primary font-semibold">Social Unity</div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8 hover-lift">
                    <div class="text-primary text-3xl mb-4">🙏</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Ancestor Veneration</h3>
                    <p class="text-gray-600 mb-4">
                        Solemn observances honoring deceased community members. Rituals maintain spiritual connection and ensure proper guidance from ancestral spirits.
                    </p>
                    <div class="text-sm text-primary font-semibold">Spiritual Practice</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spiritual Beliefs & Traditional Healers -->
    <section class="py-16 px-4 bg-gradient-to-br from-primary/5 to-secondary/5">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Spiritual Beliefs & Traditional Healers</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Spiritual Leadership: The Mombaki</h3>
                        <p class="text-gray-600 mb-6">
                            The Aeta have traditional spiritual leaders called <strong>Mombaki</strong>, who serve as priests, healers, and crucial mediators between the people and the spiritual realm. The Mombaki commune with the supreme being and nature spirits that inhabit the forest, mountains, and natural landmarks.
                        </p>
                        
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">The Role of Mombaki</h4>
                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li><strong>Spiritual Guidance:</strong> Leading rituals, ceremonies, and spiritual practices</li>
                            <li><strong>Healing:</strong> Using traditional herbs, spiritual practices, and rituals to treat illness</li>
                            <li><strong>Mediation:</strong> Acting as intermediaries with spirits and ancestors</li>
                            <li><strong>Preservation:</strong> Maintaining oral traditions, songs, stories, and cultural knowledge</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Oral Traditions & Cultural Knowledge</h3>
                        <p class="text-gray-600 mb-6">
                            The Aeta have a rich tradition of <strong>songs, oral stories, riddles, and poems</strong>—many of which are recited and preserved by the Mombaki during rituals and community gatherings. These traditions encode cultural knowledge, historical memory, and moral teachings essential to Aeta identity.
                        </p>
                        
                        <h4 class="text-lg font-semibold text-gray-800 mb-3">Modern Challenges</h4>
                        <p class="text-gray-600">
                            Historically, many Mombaki lived in isolation, close to the forest, to commune with nature and spirits. Today, only a few traditional spiritual leaders remain who maintain close spiritual practices; many have moved closer to urban areas, affecting traditional spiritual connections and the transmission of spiritual knowledge to younger generations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Traditional Food & Cooking Methods -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Traditional Food & Cooking Methods</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Ancient culinary traditions that reflect Aeta's resourcefulness and connection to nature
                </p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">A Unique Cooking Tradition: Bamboo Cooking</h3>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">How Bamboo Cooking is Prepared</h4>
                        <p class="text-gray-600 mb-4">
                            One of the most distinctive aspects of Aeta culinary culture is traditional cooking using bamboo tubes. This remarkable technique showcases the Aeta's resourcefulness and deep connection to their natural environment.
                        </p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-600">
                            <li><strong>Proteins:</strong> Wild game, fish, and small animals</li>
                            <li><strong>Root Vegetables:</strong> Taro, sweet potato, wild yams, and other tubers</li>
                            <li><strong>Aromatics:</strong> Wild herbs, ginger, lemon grass, and natural salts</li>
                            <li><strong>Cooking Method:</strong> Sealed bamboo tubes roasted over open fire</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">The Result & Cultural Significance</h4>
                        <p class="text-gray-600 mb-4">
                            The bamboo acts as a natural "enclosed oven," trapping steam and heat to slowly cook the ingredients. The result is an incredibly flavorful dish where the food absorbs the subtle taste of bamboo while remaining moist and tender.
                        </p>
                        <p class="text-gray-600">
                            In modern times, this traditional cooking method is often prepared only for special occasions or when hosting visitors, representing a cherished link to traditional practices. The dish embodies generations of culinary wisdom and remains a point of cultural pride for Aeta families.
                        </p>
                    </div>
                </div>
                
                <div class="mt-8 p-6 bg-amber-50 rounded-lg border-l-4 border-primary">
                    <p class="text-gray-700 italic">
                        "The bamboo cooking method represents more than just food preparation—it embodies our people's harmony with nature and our ability to create sustenance from the forest's bounty."
                    </p>
                    <p class="text-sm text-primary font-semibold mt-2">— Aeta Elder</p>
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
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                // Toggle the button icons
                const blockSvg = mobileMenuButton.querySelector('.block');
                const hiddenSvg = mobileMenuButton.querySelector('.hidden');
                if (blockSvg && hiddenSvg) {
                    blockSvg.classList.toggle('hidden');
                    hiddenSvg.classList.toggle('hidden');
                    blockSvg.classList.toggle('block');
                    hiddenSvg.classList.toggle('block');
                }
            });
        }

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
