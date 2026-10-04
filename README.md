# Exclusive On Trip — Sitio Web

Sitio web oficial de **Exclusive On Trip**, agencia de tours y experiencias exclusivas en Cancún y la Riviera Maya.

🔗 **Sitio en vivo:** [https://exclusiveontrip.com/](https://exclusiveontrip.com/)

Construido con [Astro](https://astro.build) y [Tailwind CSS v4](https://tailwindcss.com). 100% estático (sin React), optimizado para SEO y velocidad.

## ✨ Características

- **7 páginas** estáticas: Inicio, Tours, Servicios, Conócenos, 404 y páginas legales.
- **Catálogo de tours** con filtros por categoría (Acuáticos, Culturales, Aventura, Privados).
- **Modal de detalle** por experiencia con highlights y reserva directa por WhatsApp.
- **Diseño responsive** con paleta de marca (turquesa `#34efdc` + pizarra) y tipografías Poppins + Lato.
- **SEO**: meta tags, Open Graph, datos estructurados JSON-LD (`TravelAgency`), `sitemap.xml` y `robots.txt`.
- **Imágenes optimizadas** en WebP.
- Sin dependencias de fuentes o imágenes externas críticas.

## 🧱 Stack

- Astro 7
- Tailwind CSS v4 (vía `@tailwindcss/vite`)
- `@astrojs/sitemap`

## 📁 Estructura

```
src/
├── components/   # Icon, Navbar, Footer, TourCard, TourModal
├── data/         # content.js (tours, servicios, reseñas, FAQ, datos del sitio)
├── layouts/      # Layout.astro (SEO, fuentes, scripts globales)
├── pages/        # index, tours, servicios, conocenos, 404, legales
└── styles/       # global.css (Tailwind + animaciones)
public/
├── imgs/         # imágenes de tours, galería, hero y logo
└── robots.txt
```

## 🚀 Comandos

| Comando            | Acción                                       |
| ------------------ | -------------------------------------------- |
| `npm install`      | Instala dependencias                         |
| `npm run dev`      | Servidor de desarrollo en `localhost:4321`   |
| `npm run build`    | Genera el sitio estático en `./dist/`        |
| `npm run preview`  | Previsualiza el build de producción          |

## ✏️ Editar contenido

- **Tours y servicios:** `src/data/content.js`
- **Datos de contacto, redes, logo:** objeto `SITE` en `src/data/content.js`
- **Color de marca:** `--color-brand` en `src/styles/global.css`
- **Imágenes:** `public/imgs/`

## 🌐 Deploy

El sitio es estático; publica la carpeta `dist/` en cualquier hosting (Netlify, Vercel, Cloudflare Pages o hosting tradicional).

---

© Exclusive On Trip. Todos los derechos reservados.
