<!-- Top Navigation with Historical Journey -->
<nav class="fixed top-0 left-0 right-0 text-white shadow-lg z-50 transition-all duration-300 nav-glass" id="main-nav">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">
            <a href="#home" class="text-2xl font-bold text-white hover:text-amber-200 transition-colors"><i class="fas fa-leaf text-amber-300 mr-2"></i>Aeta Heritage</a>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="/" class="px-4 py-2 rounded-md text-sm font-medium text-white hover:bg-amber-800 transition-colors duration-200">Home</a>
              
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-amber-200 hover:text-white hover:bg-amber-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-amber-900 focus:ring-white transition-colors" 
                        aria-expanded="false" id="mobile-menu-button" aria-haspopup="true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div class="md:hidden hidden transition-all duration-300" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 mobile-menu-glass rounded-b-xl border-t border-white/10">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-amber-700 transition-colors duration-200">Home</a>

    </div>
</nav>
