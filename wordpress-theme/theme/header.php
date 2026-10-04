<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind (Play CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            cyan: '#34efdc',
                            dark: '#0f172a',
                            light: '#f6f8f8',
                        }
                    },
                    fontFamily: {
                        sans: ['Lato', 'sans-serif'],
                        display: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Iconos (versión fija para evitar cambios inesperados) -->
    <script src="https://unpkg.com/lucide@1.51.0/dist/umd/lucide.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class('font-sans antialiased text-slate-900 bg-white flex flex-col min-h-screen'); ?>>
<?php wp_body_open(); ?>

<!-- NAVBAR -->
<nav id="navbar" class="fixed w-full z-50 top-0 left-0 bg-white/95 backdrop-blur-md shadow-sm py-3">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-2 shrink-0">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo-mark.png" alt="Exclusive On Trip" class="h-9 md:h-10 w-auto" />
            <span class="poppins text-base md:text-xl font-bold tracking-tighter text-slate-900">EXCLUSIVE ON TRIP</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-1">
            <a href="/" class="poppins px-4 lg:px-5 py-2 text-[11px] font-semibold tracking-widest flex items-center gap-2 text-slate-500 hover:text-slate-900 transition-colors">
                <i data-lucide="home" class="w-3.5 h-3.5"></i> INICIO
            </a>
            <a href="/tours" class="poppins px-4 lg:px-5 py-2 text-[11px] font-semibold tracking-widest flex items-center gap-2 text-slate-500 hover:text-slate-900 transition-colors">
                <i data-lucide="compass" class="w-3.5 h-3.5"></i> TOURS
            </a>
            <a href="/servicios" class="poppins px-4 lg:px-5 py-2 text-[11px] font-semibold tracking-widest flex items-center gap-2 text-slate-500 hover:text-slate-900 transition-colors">
                <i data-lucide="anchor" class="w-3.5 h-3.5"></i> SERVICIOS
            </a>
            <a href="/conocenos" class="poppins px-4 lg:px-5 py-2 text-[11px] font-semibold tracking-widest flex items-center gap-2 text-slate-500 hover:text-slate-900 transition-colors">
                <i data-lucide="users" class="w-3.5 h-3.5"></i> CONÓCENOS
            </a>
            <a href="/blog/" class="poppins relative px-4 lg:px-5 py-2 text-[11px] font-semibold tracking-widest flex items-center gap-2 text-slate-900">
                <span class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5"></i> BLOG</span>
                <span class="absolute bottom-0 left-5 right-5 h-0.5 bg-brand-cyan rounded-full"></span>
            </a>
            <div class="h-6 w-px bg-slate-300/30 mx-3"></div>
            <a href="https://wa.me/5219982326023" target="_blank" rel="noopener noreferrer" class="poppins px-6 py-3 rounded-full bg-slate-900 text-white hover:scale-105 transition-transform shadow-xl text-[11px] font-semibold tracking-widest flex items-center gap-2">
                <i data-lucide="ticket" class="w-3.5 h-3.5"></i> CONTÁCTANOS
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-open-btn" class="md:hidden p-2 text-slate-900" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobile-menu">
            <i data-lucide="menu" class="w-8 h-8"></i>
        </button>
    </div>
</nav>

<!-- MOBILE MENU -->
<div id="mobile-menu" class="hidden fixed inset-0 bg-white z-[999] flex-col" role="dialog" aria-modal="true" aria-label="Menú">
    <div class="flex items-center justify-between px-6 h-[80px] border-b border-slate-100">
        <span class="poppins text-lg font-bold text-slate-900 tracking-tight">EXCLUSIVE ON TRIP</span>
        <button id="menu-close-btn" class="p-2 rounded-xl bg-slate-100" aria-label="Cerrar">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>
    </div>
    <div class="flex flex-col px-6 py-12 gap-4">
        <a href="/" class="bg-slate-50 rounded-2xl px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-white rounded-xl shadow-sm"><i data-lucide="home" class="w-5 h-5"></i></div>
                <span class="poppins text-lg font-medium text-slate-900">Inicio</span>
            </div>
            <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="/tours" class="bg-slate-50 rounded-2xl px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-white rounded-xl shadow-sm"><i data-lucide="compass" class="w-5 h-5"></i></div>
                <span class="poppins text-lg font-medium text-slate-900">Nuestros Tours</span>
            </div>
            <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="/servicios" class="bg-slate-50 rounded-2xl px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-white rounded-xl shadow-sm"><i data-lucide="anchor" class="w-5 h-5"></i></div>
                <span class="poppins text-lg font-medium text-slate-900">Servicios</span>
            </div>
            <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="/conocenos" class="bg-slate-50 rounded-2xl px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-white rounded-xl shadow-sm"><i data-lucide="users" class="w-5 h-5"></i></div>
                <span class="poppins text-lg font-medium text-slate-900">Conócenos</span>
            </div>
            <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="/blog/" class="bg-slate-50 rounded-2xl px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-white rounded-xl shadow-sm"><i data-lucide="sparkles" class="w-5 h-5"></i></div>
                <span class="poppins text-lg font-medium text-slate-900">Blog</span>
            </div>
            <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400"></i>
        </a>
    </div>
    <div class="mt-auto px-6 pb-8">
        <div class="bg-slate-900 rounded-3xl p-6 shadow-2xl text-center">
            <p class="text-white text-[10px] uppercase tracking-widest mb-4 opacity-70">Agencia #1 en Cancún</p>
            <a href="https://wa.me/5219982326023" target="_blank" rel="noopener noreferrer" class="poppins block w-full bg-brand-cyan text-slate-900 py-5 rounded-2xl font-bold uppercase text-xs tracking-widest">Reservar por WhatsApp</a>
        </div>
    </div>
</div>

<script>
    (function () {
        var menu  = document.getElementById('mobile-menu');
        var open  = document.getElementById('menu-open-btn');
        var close = document.getElementById('menu-close-btn');
        function showMenu() {
            menu.classList.remove('hidden');
            menu.classList.add('flex');
            document.body.style.overflow = 'hidden';
            if (open) open.setAttribute('aria-expanded', 'true');
        }
        function hideMenu() {
            menu.classList.add('hidden');
            menu.classList.remove('flex');
            document.body.style.overflow = '';
            if (open) open.setAttribute('aria-expanded', 'false');
        }
        if (open)  open.addEventListener('click', showMenu);
        if (close) close.addEventListener('click', hideMenu);
    })();
</script>

<!-- Contenedor principal (lo cierra footer.php), mantiene el footer abajo -->
<div class="flex-grow">
