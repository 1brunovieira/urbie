<footer class="bg-slate-950 text-slate-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Top --}}
        <div class="grid grid-cols-2 md:grid-cols-5 gap-10 py-16">

            {{-- Brand --}}
            <div class="col-span-2">
                <a href="{{ url('/') }}" class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-urbie-600 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 9.5L12 3l9 6.5V21H3V9.5z"/>
                            <path fill="white" fill-opacity=".3" d="M9 21V13h6v8H9z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white">urbie</span>
                </a>
                <p class="text-sm leading-relaxed mb-6 max-w-xs">
                    Descomplicar a gestão condominial com tecnologia moderna, segura e acessível para síndicos e moradores.
                </p>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 hover:bg-urbie-600 flex items-center justify-center transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 hover:bg-urbie-600 flex items-center justify-center transition-colors" aria-label="LinkedIn">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Links --}}
            <div>
                <h4 class="text-white font-semibold text-sm mb-4">Produto</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="#funcionalidades" class="hover:text-white transition-colors">Funcionalidades</a></li>
                    <li><a href="#como-funciona" class="hover:text-white transition-colors">Como funciona</a></li>
                    <li><a href="#planos" class="hover:text-white transition-colors">Planos e preços</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">App mobile</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold text-sm mb-4">Recursos</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Central de ajuda</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Documentação API</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Status do sistema</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold text-sm mb-4">Empresa</h4>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Sobre nós</a></li>
                    <li><a href="#contato" class="hover:text-white transition-colors">Contato</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Política de privacidade</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Termos de uso</a></li>
                </ul>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="border-t border-slate-800 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-xs">© {{ date('Y') }} Urbie. Todos os direitos reservados.</p>
            <p class="text-xs">Feito com <span class="text-urbie-400">♥</span> para síndicos e moradores</p>
        </div>
    </div>
</footer>
