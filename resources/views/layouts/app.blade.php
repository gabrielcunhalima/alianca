<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Consultoria especializada em estudos de engenharia, portos, rodovias, ferrovias, meio ambiente e licitações públicas. Atuação nacional.')">
    <title>@yield('title', 'Aliança Consultoria — Engenharia, Infraestrutura e Transporte')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='4' fill='%23041562'/><text x='50%25' y='54%25' dominant-baseline='middle' text-anchor='middle' font-size='18' font-weight='900' fill='%23DA1212' font-family='Inter,sans-serif'>A</text></svg>">

    <!-- Fonts: Reddit Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lenis smooth scroll -->
    <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.14/dist/lenis.min.js"></script>
</head>

<body x-data="{ mobileMenuOpen: false }" class="antialiased" style="background-color: #0b0e1a; color: #EEEEEE;">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 border-b" style="background-color: rgba(11,14,26,0.96); backdrop-filter: blur(16px); border-color: rgba(80,110,200,0.12);">
        <div class="max-w-7xl mx-auto px-6 lg:px-20">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <span class="w-1 h-6 rounded-full" style="background-color: #DA1212;"></span>
                    <span class="font-bold text-xl tracking-tight" style="color: #EEEEEE;">
                        Aliança <span style="color: rgba(238,238,238,0.4);">Consultoria</span>
                    </span>
                </a>

                <!-- Desktop Links -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('servicos') }}" class="text-sm font-medium transition-colors" style="color: rgba(238,238,238,0.6);" onmouseover="this.style.color='#EEEEEE'" onmouseout="this.style.color='rgba(238,238,238,0.6)'">Serviços</a>
                    <a href="{{ route('sobre') }}" class="text-sm font-medium transition-colors" style="color: rgba(238,238,238,0.6);" onmouseover="this.style.color='#EEEEEE'" onmouseout="this.style.color='rgba(238,238,238,0.6)'">Sobre</a>
                    <a href="{{ route('clientes') }}" class="text-sm font-medium transition-colors" style="color: rgba(238,238,238,0.6);" onmouseover="this.style.color='#EEEEEE'" onmouseout="this.style.color='rgba(238,238,238,0.6)'">Clientes</a>
                    <a href="{{ route('contato') }}" class="btn-accent text-sm">
                        Agendar Consultoria
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2" style="color: #EEEEEE;">
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t py-4 flex flex-col gap-4" style="border-color: rgba(80,110,200,0.14);">
                <a href="{{ route('servicos') }}" class="text-sm font-medium" style="color: rgba(238,238,238,0.7);">Serviços</a>
                <a href="{{ route('sobre') }}" class="text-sm font-medium" style="color: rgba(238,238,238,0.7);">Sobre</a>
                <a href="{{ route('clientes') }}" class="text-sm font-medium" style="color: rgba(238,238,238,0.7);">Clientes</a>
                <a href="{{ route('contato') }}" class="btn-accent text-sm text-center">Agendar Consultoria</a>
            </div>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="border-t" style="background-color: #080b15; border-color: rgba(80,110,200,0.12);">
        <div class="max-w-7xl mx-auto px-6 lg:px-20 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="w-1 h-5 rounded-full" style="background-color: #DA1212;"></span>
                        <p class="font-bold text-lg" style="color: #EEEEEE;">Aliança Consultoria</p>
                    </div>
                    <p class="text-sm leading-relaxed max-w-sm" style="color: rgba(238,238,238,0.4);">
                        Consultoria especializada em engenharia, infraestrutura e transporte. Inovação, eficiência e sustentabilidade em cada projeto.
                    </p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest mb-4" style="color: rgba(238,238,238,0.35);">Navegação</p>
                    <ul class="space-y-2">
                        <li><a href="{{ route('servicos') }}" class="text-sm transition-colors hover:text-white" style="color: rgba(238,238,238,0.4);">Serviços</a></li>
                        <li><a href="{{ route('sobre') }}" class="text-sm transition-colors hover:text-white" style="color: rgba(238,238,238,0.4);">Sobre</a></li>
                        <li><a href="{{ route('clientes') }}" class="text-sm transition-colors hover:text-white" style="color: rgba(238,238,238,0.4);">Clientes</a></li>
                        <li><a href="{{ route('contato') }}" class="text-sm transition-colors hover:text-white" style="color: rgba(238,238,238,0.4);">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest mb-4" style="color: rgba(238,238,238,0.35);">Contato</p>
                    <ul class="space-y-2 text-sm" style="color: rgba(238,238,238,0.4);">
                        <li><a href="tel:4832078826" class="hover:text-white transition-colors">(48) 3207 8826</a></li>
                        <li><a href="https://wa.me/5548999299757" target="_blank" class="hover:text-white transition-colors">WhatsApp</a></li>
                        <li>financeiro@aliancaadministracao.com</li>
                        <li>Florianópolis, SC</li>
                    </ul>
                </div>
            </div>
            <div class="border-t mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4" style="border-color: rgba(80,110,200,0.12);">
                <p class="text-xs" style="color: rgba(238,238,238,0.2);">© 2026 Aliança Consultoria e Administração LTDA — CNPJ 15.459.759/0001-04</p>
                <p class="text-xs" style="color: rgba(238,238,238,0.2);">Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        const lenis = new Lenis({ lerp: 0.1, smoothWheel: true });
        function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
        requestAnimationFrame(raf);
    </script>
</body>

</html>
