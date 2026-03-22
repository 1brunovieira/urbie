<nav
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
    :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-sm' : 'bg-transparent'"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-18">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-lg bg-urbie-600 flex items-center justify-center shadow-sm group-hover:bg-urbie-700 transition-colors">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 9.5L12 3l9 6.5V21H3V9.5z"/>
                        <path fill="white" fill-opacity=".3" d="M9 21V13h6v8H9z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-slate-900">urbie</span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#funcionalidades" class="text-sm font-medium text-slate-600 hover:text-urbie-600 transition-colors">Funcionalidades</a>
                <a href="#como-funciona" class="text-sm font-medium text-slate-600 hover:text-urbie-600 transition-colors">Como funciona</a>
                <a href="#planos" class="text-sm font-medium text-slate-600 hover:text-urbie-600 transition-colors">Planos</a>
                <a href="#contato" class="text-sm font-medium text-slate-600 hover:text-urbie-600 transition-colors">Contato</a>
            </div>

            {{-- Desktop CTA --}}
            <div class="hidden md:flex items-center gap-3">
                <a href="#" class="text-sm font-medium text-slate-600 hover:text-urbie-600 transition-colors px-3 py-2">
                    Entrar
                </a>
                <a href="#contato" class="btn-primary text-sm py-2.5">
                    Solicitar Demo
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button
                @click="open = !open"
                class="md:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 transition-colors"
                :aria-expanded="open"
                aria-label="Menu"
            >
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div
            x-show="open"
            x-collapse
            class="md:hidden border-t border-slate-100 bg-white"
        >
            <div class="px-2 pt-2 pb-4 space-y-1">
                <a href="#funcionalidades" @click="open = false" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-urbie-50 hover:text-urbie-600 transition-colors">Funcionalidades</a>
                <a href="#como-funciona" @click="open = false" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-urbie-50 hover:text-urbie-600 transition-colors">Como funciona</a>
                <a href="#planos" @click="open = false" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-urbie-50 hover:text-urbie-600 transition-colors">Planos</a>
                <a href="#contato" @click="open = false" class="block px-4 py-2.5 rounded-lg text-sm font-medium text-slate-700 hover:bg-urbie-50 hover:text-urbie-600 transition-colors">Contato</a>
                <div class="pt-2 flex flex-col gap-2">
                    <a href="#" class="btn-secondary text-center justify-center">Entrar</a>
                    <a href="#contato" @click="open = false" class="btn-primary text-center justify-center">Solicitar Demo</a>
                </div>
            </div>
        </div>
    </div>
</nav>
