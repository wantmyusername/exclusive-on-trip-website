<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="bg-slate-50 min-h-screen pb-20">

    <!-- 1. HEADER INMERSIVO (IMAGEN DE FONDO) -->
    <div class="relative w-full h-[60vh] min-h-[400px]">
        <?php if ( has_post_thumbnail() ) : ?>
            <img
                src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>"
                alt="<?php echo esc_attr( get_the_title() ); ?>"
                class="absolute inset-0 w-full h-full object-cover"
            />
            <!-- Gradiente para elegancia y legibilidad -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-transparent to-black/10"></div>
        <?php else: ?>
            <div class="absolute inset-0 bg-brand-dark flex items-center justify-center">
                <span class="text-white opacity-50">Exclusive Blog</span>
            </div>
        <?php endif; ?>

        <!-- BOTÓN VOLVER (GLASSMORPHISM) -->
        <a href="/blog/" class="absolute top-24 left-6 md:left-12 z-20 flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white font-bold hover:bg-white hover:text-brand-dark transition-all duration-300 group">
            <i data-lucide="arrow-left" class="w-5 h-5 transition-transform group-hover:-translate-x-1"></i>
            <span>Volver</span>
        </a>
    </div>

    <!-- 2. TARJETA DE CONTENIDO FLOTANTE -->
    <div class="container mx-auto px-4 md:px-6 relative z-10 -mt-32 md:-mt-48">
        <article class="bg-white rounded-[2rem] shadow-2xl p-8 md:p-16 max-w-5xl mx-auto">

            <!-- Metadatos -->
            <div class="flex flex-wrap items-center gap-4 mb-6 text-sm font-bold tracking-widest uppercase text-brand-cyan">
                <span class="bg-brand-light px-3 py-1 rounded-lg"><?php echo esc_html( get_the_date() ); ?></span>
                <span class="text-slate-300">•</span>
                <span class="flex items-center gap-2">
                    <i data-lucide="user" class="w-4 h-4"></i> <?php the_author(); ?>
                </span>
            </div>

            <!-- Título -->
            <h1 class="poppins text-3xl md:text-5xl lg:text-6xl font-bold text-brand-dark mb-10 leading-tight">
                <?php the_title(); ?>
            </h1>

            <hr class="border-slate-100 mb-10">

            <!-- CONTENIDO DEL POST -->
            <div class="blog-content max-w-none text-slate-600 leading-relaxed">
                <?php the_content(); ?>
            </div>

            <!-- Footer del artículo -->
            <div class="mt-20 pt-10 border-t border-slate-100">
                <div class="bg-brand-light rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h4 class="poppins font-bold text-brand-dark text-xl mb-2">¿Te gustó este artículo?</h4>
                        <p class="text-slate-500">Compártelo con tus amigos o reserva tu viaje ahora.</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="https://wa.me/5219982326023?text=<?php echo rawurlencode( 'Leí su blog sobre ' . get_the_title() . ' y quiero reservar' ); ?>" target="_blank" rel="noopener noreferrer" class="poppins bg-brand-cyan text-slate-900 px-8 py-3 rounded-full font-bold hover:brightness-110 transition-all shadow-lg flex items-center gap-2">
                            <i data-lucide="message-circle" class="w-5 h-5"></i> Cotizar Tour
                        </a>
                    </div>
                </div>
            </div>

        </article>
    </div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
