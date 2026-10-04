      </div> <!-- Cierre del div principal que se abrió en header.php -->

      <footer class="bg-white border-t border-slate-100 pt-24 pb-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">

          <!-- COLUMNA 1: BRAND -->
          <div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo.png" alt="Exclusive On Trip" class="h-10 mb-8" />
            <p class="text-slate-500 text-sm leading-relaxed font-medium mb-8">
              Expertos en crear memorias inolvidables en el Caribe Mexicano. Tours y servicios exclusivos diseñados a tu medida.
            </p>
            <div class="flex gap-3">
              <!-- Facebook (Lucide ya no incluye iconos de marca, por eso va como SVG inline) -->
              <a href="https://facebook.com/exclusiveontrip" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                 class="w-10 h-10 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#1877F2] hover:text-white hover:border-transparent transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                </svg>
              </a>
              <!-- Instagram -->
              <a href="https://www.instagram.com/exclusiveontrip/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                 class="w-10 h-10 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#E4405F] hover:text-white hover:border-transparent transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- COLUMNA 2: NAVEGACIÓN -->
          <div>
            <h4 class="poppins font-bold text-slate-900 text-[10px] uppercase tracking-[0.2em] mb-8">Navegación</h4>
            <ul class="flex flex-col gap-4 text-sm text-slate-500">
              <li><a href="/" class="hover:text-brand-cyan transition-colors">Inicio</a></li>
              <li><a href="/tours" class="hover:text-brand-cyan transition-colors">Catálogo de Tours</a></li>
              <li><a href="/servicios" class="hover:text-brand-cyan transition-colors">Servicios Exclusivos</a></li>
              <li><a href="/conocenos" class="hover:text-brand-cyan transition-colors">Conócenos</a></li>
              <li><a href="/blog/" class="hover:text-brand-cyan transition-colors">Nuestro Blog</a></li>
            </ul>
          </div>

          <!-- COLUMNA 3: ATENCIÓN VIP -->
          <div>
            <h4 class="poppins font-bold text-slate-900 text-[10px] uppercase tracking-[0.2em] mb-8">Atención VIP</h4>
            <div class="flex flex-col gap-4 text-sm text-slate-500">
              <div class="flex items-start gap-3">
                <i data-lucide="map-pin" class="w-4 h-4 text-brand-cyan shrink-0 mt-0.5"></i>
                <span>Av. Bonampak, Cancún, Quintana Roo, México. CP 77500</span>
              </div>
              <a href="https://wa.me/5219982326023" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 hover:text-brand-cyan transition-colors">
                <i data-lucide="phone" class="w-4 h-4 text-brand-cyan shrink-0"></i>
                WhatsApp +52 (998) 232 6023
              </a>
            </div>
          </div>

          <!-- COLUMNA 4: COMPRA SEGURA -->
          <div>
            <div class="bg-slate-50 p-6 rounded-[2rem] border border-slate-100">
              <div class="flex items-center gap-4 mb-4">
                <i data-lucide="shield-check" class="w-8 h-8 text-brand-cyan"></i>
                <span class="poppins font-bold text-slate-900 text-xs">COMPRA SEGURA</span>
              </div>
              <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200">
                <span class="px-2 py-1 bg-white border border-slate-200 rounded text-[7px] font-bold italic text-slate-400">VISA</span>
                <span class="px-2 py-1 bg-white border border-slate-200 rounded text-[7px] font-bold italic text-slate-400">MASTERCARD</span>
                <span class="px-2 py-1 bg-white border border-slate-200 rounded text-[7px] font-bold italic text-slate-400">AMEX</span>
                <span class="px-2 py-1 bg-white border border-slate-200 rounded text-[7px] font-bold italic text-slate-400">PAYPAL</span>
              </div>
            </div>
          </div>
        </div>

        <!-- BOTTOM BAR -->
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4 text-[10px] font-medium text-slate-400 uppercase tracking-widest pt-10 border-t border-slate-50">
          <span>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> Exclusive On Trip</span>
          <div class="flex gap-6">
            <a href="/politica-de-privacidad" class="hover:text-slate-700 transition-colors">Política de Privacidad</a>
            <a href="/terminos-y-condiciones" class="hover:text-slate-700 transition-colors">Términos y Condiciones</a>
          </div>
        </div>
      </footer>

      <!-- Inicializar iconos Lucide -->
      <script>
        (function () {
          function initIcons() {
            if (window.lucide && typeof window.lucide.createIcons === 'function') {
              window.lucide.createIcons();
            }
          }
          if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initIcons);
          } else {
            initIcons();
          }
        })();
      </script>

      <?php wp_footer(); ?>
    </body>
    </html>
