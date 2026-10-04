<?php get_header(); ?>

<div class="container mx-auto px-6 pt-28 pb-16">

    <!-- ENCABEZADO -->
    <div class="text-center mb-16">
        <span class="poppins text-brand-cyan font-bold tracking-[0.3em] text-[10px] uppercase mb-3 block">
            Blog de Exclusive On Trip · Agencia #1 en Cancún
        </span>
        <h1 class="poppins text-4xl md:text-6xl font-bold tracking-tighter text-brand-dark mb-4">
            Inspiración para tu viaje
        </h1>
        <p class="text-slate-500 max-w-2xl mx-auto text-lg">
            Descubre los secretos mejor guardados del Caribe Mexicano.
        </p>
    </div>

    <?php if ( have_posts() ) : ?>
        <!-- GRID DE ARTÍCULOS -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all border border-slate-100 flex flex-col h-full">
                    <!-- Imagen -->
                    <div class="aspect-[4/3] overflow-hidden bg-slate-100 relative">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="<?php echo esc_attr( get_the_title() ); ?>">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center text-slate-400">Sin Imagen</div>
                        <?php endif; ?>
                    </div>

                    <!-- Contenido -->
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="poppins text-[10px] font-bold text-brand-cyan uppercase tracking-[0.2em] mb-3">
                            <?php echo esc_html( get_the_date() ); ?>
                        </div>
                        <h2 class="poppins text-xl font-bold text-slate-900 mb-3 leading-tight group-hover:text-brand-cyan transition-colors">
                            <?php the_title(); ?>
                        </h2>
                        <div class="text-slate-500 text-sm line-clamp-3 mb-6 flex-grow">
                            <?php the_excerpt(); ?>
                        </div>
                        <span class="poppins text-slate-900 font-bold text-xs uppercase tracking-widest flex items-center gap-2 group-hover:gap-3 group-hover:text-brand-cyan transition-all">
                            Leer artículo <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>

        <!-- PAGINACIÓN -->
        <div class="mt-20 mb-12 flex flex-wrap justify-center items-center gap-2">
            <?php
            $links = paginate_links( array(
                'type'      => 'array',
                'prev_text' => '<i data-lucide="chevron-left" class="w-5 h-5"></i>',
                'next_text' => '<i data-lucide="chevron-right" class="w-5 h-5"></i>',
                'mid_size'  => 1,
            ) );

            if ( $links ) {
                foreach ( $links as $link ) {
                    // Los "…" se muestran como texto simple, sin botón
                    if ( strpos( $link, 'dots' ) !== false ) {
                        echo '<span class="px-2 text-slate-400">…</span>';
                        continue;
                    }

                    // Estilo base para todos los botones
                    $link = str_replace( 'page-numbers', 'poppins inline-flex items-center justify-center min-w-[3rem] h-12 px-4 rounded-full border border-slate-200 text-slate-600 hover:bg-brand-cyan hover:text-slate-900 hover:border-brand-cyan transition-all font-bold text-sm', $link );

                    // Página activa
                    if ( strpos( $link, 'current' ) !== false ) {
                        $link = str_replace( 'text-slate-600', 'bg-brand-dark text-white border-brand-dark', $link );
                        $link = str_replace( 'hover:bg-brand-cyan', 'hover:bg-brand-dark', $link );
                        $link = str_replace( 'hover:text-slate-900', 'hover:text-white', $link );
                    }

                    echo $link;
                }
            }
            ?>
        </div>
    <?php else : ?>
        <p class="text-center text-slate-500 text-lg py-20">Aún no hay artículos publicados. ¡Vuelve pronto!</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
