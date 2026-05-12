<?php
/**
 * Template Name: Nosotros
 *
 * Página del equipo editorial de DIVERGENTES.
 * Fuente de verdad: js/authors.js (window.AUTHORS)
 * Las fotos se inyectan vía nosotros.js leyendo window.AUTHORS por data-author-slug.
 *
 * SLUGS PENDIENTES DE DATOS EN authors.js:
 *   claudia-tijerino, johanna-baca, jose-denis-cruz, paula-carrion
 *   → muestran iniciales hasta que se agregue su entrada en authors.js
 *
 * NOTA sobre slugs con nombre distinto al archivo de foto:
 *   indira-gomez   → nombre real: Cristina Fonseca   (sin foto aún)
 *   tatyana-luna   → nombre real: Catalina Fabbri    (sin foto aún)
 *   jareth-gutierrez → nombre real: Marcela Moreno   (foto: jareth-gutierrez.webp)
 */

add_filter( 'body_class', function( $classes ) {
    $classes[] = 'nosotros-page';
    return $classes;
} );

get_header();
?>

<!-- ═══════════════════════════════════════════════════════════════════════
     PÁGINA NOSOTROS — DIVERGENTES
     Fuente de verdad: js/authors.js
     Prefijo BEM: nos-
════════════════════════════════════════════════════════════════════════ -->

<!-- ── HERO ──────────────────────────────────────────────────────────── -->
<section class="nos-hero">
  <div class="nos-hero__grid">
    <div>
      <p class="nos-hero__eyebrow">— Nosotros</p>
      <h1 class="nos-hero__title">
        <span class="nos-hero__line nos-hero__line--primary">Quienes</span>
        <span class="nos-hero__line nos-hero__line--accent">sostienen la</span>
        <span class="nos-hero__line nos-hero__line--primary">redacción.</span>
      </h1>
    </div>
    <div class="nos-hero__lede">
      <p>DIVERGENTES es un medio independiente que cubre Nicaragua y Centroamérica desde el exilio. Estamos organizados de forma remota desde cinco países. Aquí presentamos al equipo que hace posible cada investigación, video, boletín y producto digital.</p>
      <dl class="nos-hero__stats" data-nos-stats>
        <div class="nos-stat">
          <dt class="nos-stat__label">Integrantes</dt>
          <dd class="nos-stat__value" data-nos-count="15" data-nos-prefix="" data-nos-pad="2">00</dd>
        </div>
        <div class="nos-stat">
          <dt class="nos-stat__label">Áreas de trabajo</dt>
          <dd class="nos-stat__value" data-nos-count="6" data-nos-prefix="" data-nos-pad="2">00</dd>
        </div>
        <div class="nos-stat">
          <dt class="nos-stat__label">Premios internacionales</dt>
          <dd class="nos-stat__value" data-nos-count="12" data-nos-prefix="+" data-nos-pad="0">+00</dd>
        </div>
      </dl>
    </div>
  </div>
</section>

<!-- ── CUERPO: ROSTER + SIDENAV ──────────────────────────────────────── -->
<div class="nos-page-body">

  <main class="nos-roster">

    <!-- ── DIRECCIÓN GENERAL ─────────────────────────────────────────── -->
    <section class="nos-dept" id="dir-general">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Dirección General</h2>
        <span class="nos-dept__count">02</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card" data-author-slug="nestor-arce">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">NA</div>
            <div class="nos-card__social">
              <a href="https://x.com/nestorarce" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/nestor-arce-aburto" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Néstor Andrés Arce Aburto</h3>
          <p class="nos-card__role">Director General · Cofundador</p>
          <p class="nos-card__bio">Periodista, director de medios y productor multimedia con más de 15 años de experiencia. Cofundador y Director General de Divergentes. Premio Ortega y Gasset y premio SIP por excelencia en periodismo de derechos humanos.</p>
          <span class="nos-card__location">Centroamérica</span>
        </div>

        <div class="nos-card" data-author-slug="carlos-herrera">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CH</div>
            <div class="nos-card__social">
              <a href="https://x.com/cherrera_ni" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/carlos-herrera-gonzalez" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Carlos Alberto Herrera González</h3>
          <p class="nos-card__role">Director Financiero · Cofundador</p>
          <p class="nos-card__bio">Profesional de medios y cofundador de Divergentes con 18 años de experiencia en periodismo, operaciones de medios y gestión organizacional.</p>
          <span class="nos-card__location">Costa Rica / Nicaragua</span>
        </div>

      </div>
    </section>

    <!-- ── DIRECCIÓN DE PROYECTOS ─────────────────────────────────────── -->
    <section class="nos-dept" id="dir-proyectos">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Dirección de Proyectos</h2>
        <span class="nos-dept__count">01</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card" data-author-slug="doreen-fwambo">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">DF</div>
            <div class="nos-card__social">
              <a href="https://x.com/doreenfwambo" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/doreen-fwambo-araya" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Doreen Fwambo Araya</h3>
          <p class="nos-card__role">Coordinadora de Proyectos</p>
          <p class="nos-card__bio">Socióloga y gestora de proyectos con más de 10 años diseñando, gestionando y evaluando programas sobre desarrollo social, migración y derechos humanos en Centroamérica.</p>
          <span class="nos-card__location">Costa Rica</span>
        </div>

      </div>
    </section>

    <!-- ── DIRECCIÓN EDITORIAL ───────────────────────────────────────── -->
    <section class="nos-dept" id="dir-editorial">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Dirección Editorial</h2>
        <span class="nos-dept__count">02</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card" data-author-slug="wilfredo-miranda">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">WM</div>
            <div class="nos-card__social">
              <a href="https://x.com/wilfredomiranda" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/wilfredo-miranda" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Wilfredo Miranda</h3>
          <p class="nos-card__role">Coordinador Editorial · Cofundador</p>
          <p class="nos-card__bio">Periodista de investigación nicaragüense con más de 15 años de experiencia. Cofundador y editor de Divergentes; colaborador de El País, The Guardian y The Washington Post.</p>
          <span class="nos-card__location">Costa Rica</span>
        </div>

        <div class="nos-card" data-author-slug="moises-martinez">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">MM</div>
            <div class="nos-card__social">
              <a href="https://x.com/moimartinezni" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/moises-martinez-editor" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Moisés Martínez</h3>
          <p class="nos-card__role">Editor en Jefe</p>
          <p class="nos-card__bio">Periodista nicaragüense de investigación con más de 20 años de experiencia en reportería investigativa, cobertura de corrupción y liderazgo editorial en medios independientes.</p>
          <span class="nos-card__location">Costa Rica</span>
        </div>

      </div>
    </section>

    <!-- ── DEPARTAMENTO AUDIOVISUAL ──────────────────────────────────── -->
    <section class="nos-dept" id="audiovisual">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Departamento Audiovisual</h2>
        <span class="nos-dept__count">04</span>
      </div>
      <div class="nos-grid-3">

        <div class="nos-card" data-author-slug="alicia-henriquez">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">AH</div>
            <div class="nos-card__social">
              <a href="https://x.com/aliciahnq" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/alicia-henriquez-porras" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Alicia Henríquez Porras</h3>
          <p class="nos-card__role">Coordinadora de Producción Audiovisual</p>
          <p class="nos-card__bio">Periodista multimedia y productora audiovisual especializada en documentales, podcasts y narrativa digital sobre derechos humanos, migración y memoria histórica en Centroamérica.</p>
          <span class="nos-card__location">Centroamérica</span>
        </div>

        <div class="nos-card" data-author-slug="miguel-gutierrez">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">MG</div>
            <div class="nos-card__social">
              <a href="https://x.com/miguelgnphoto" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/miguel-gutierrez-nunez" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Miguel Andrés Gutiérrez Núñez</h3>
          <p class="nos-card__role">Periodista Multimedia e Investigativo</p>
          <p class="nos-card__bio">Periodista multimedia y fotoperiodista con experiencia en guion, reportería de campo, producción audiovisual y narrativa digital. Su fotoperiodismo ha sido publicado por AP y El País.</p>
          <span class="nos-card__location">Costa Rica</span>
        </div>

        <div class="nos-card" data-author-slug="jareth-gutierrez">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">JG</div>
            <div class="nos-card__social">
              <a href="https://x.com/jarethgmm" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/jareth-gutierrez-moreno" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Marcela Moreno</h3>
          <p class="nos-card__role">Periodista Audiovisual</p>
          <p class="nos-card__bio">Periodista audiovisual especializada en contenido informativo digital, guion y producción de piezas audiovisuales cortas para redes sociales.</p>
          <span class="nos-card__location">Centroamérica</span>
        </div>

        <div class="nos-card" data-author-slug="aurora-martinez">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">AM</div>
            <div class="nos-card__social">
              <a href="https://x.com/auroracmm" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/aurora-martinez-molina" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Aurora Cecilia Martínez Molina</h3>
          <p class="nos-card__role">Periodista Multimedia e Investigativa</p>
          <p class="nos-card__bio">Periodista visual y editora bilingüe especializada en producir, verificar y editar contenido digital. Traduce temas políticos y sociales complejos en historias claras y accesibles.</p>
          <span class="nos-card__location">Remoto</span>
        </div>

      </div>
    </section>

    <!-- ── DISTRIBUCIÓN DE CONTENIDO Y AUDIENCIAS ────────────────────── -->
    <section class="nos-dept" id="distribucion">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Distribución de Contenido y Audiencias</h2>
        <span class="nos-dept__count">01</span>
      </div>
      <div class="nos-grid-3">

        <?php /* slug: indira-gomez → nombre real: Cristina Fonseca — sin foto aún */ ?>
        <div class="nos-card" data-author-slug="indira-gomez">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CF</div>
            <div class="nos-card__social">
              <a href="https://x.com/indiragomez_" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/indira-gomez-alvarez" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Cristina Fonseca</h3>
          <p class="nos-card__role">Coordinadora de Contenido y Estrategia de Audiencias</p>
          <p class="nos-card__bio">Especialista en comunicación y estrategia digital con más de 10 años de experiencia en estrategia de contenidos, audiencias, relaciones públicas, marketing digital y analítica.</p>
          <span class="nos-card__location">Centroamérica</span>
        </div>

      </div>
    </section>

    <!-- ── CUERPO DE REDACCIÓN ───────────────────────────────────────── -->
    <section class="nos-dept" id="redaccion">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Cuerpo de Redacción</h2>
        <span class="nos-dept__count">03</span>
      </div>
      <div class="nos-grid-3">

        <div class="nos-card" data-author-slug="massiell-largaespada">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">ML</div>
            <div class="nos-card__social">
              <a href="https://x.com/massielllarg" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/massiell-largaespada" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Massiell Largaespada</h3>
          <p class="nos-card__role">Periodista Multimedia e Investigativa</p>
          <p class="nos-card__bio">Periodista nicaragüense con más de 15 años de experiencia en televisión, prensa escrita y medios digitales. Especializada en derechos humanos y migración.</p>
          <span class="nos-card__location">Costa Rica</span>
        </div>

        <?php /* slug: tatyana-luna → nombre real: Catalina Fabbri — sin foto aún */ ?>
        <div class="nos-card" data-author-slug="tatyana-luna">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CF</div>
            <div class="nos-card__social">
              <a href="https://x.com/tatyanaluna_ni" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/tatyana-luna" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Catalina Fabbri</h3>
          <p class="nos-card__role">Periodista · Jefa de Verificación</p>
          <p class="nos-card__bio">Periodista, abogada y defensora de derechos humanos nicaragüense con más de 19 años de experiencia en periodismo de investigación, narrativa y verificación de datos.</p>
          <span class="nos-card__location">Remoto</span>
        </div>

        <?php /* PENDIENTE — foto disponible: claudia-tijerino.webp — agregar entrada en authors.js */ ?>
        <div class="nos-card" data-author-slug="claudia-tijerino">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CT</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">Claudia Tijerino</h3>
          <p class="nos-card__role">Periodista</p>
          <p class="nos-card__bio">Información pendiente de actualización en authors.js.</p>
          <span class="nos-card__location">—</span>
        </div>

      </div>
    </section>

    <!-- ── TI Y UX/UI ────────────────────────────────────────────────── -->
    <section class="nos-dept" id="ti-uxui">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">TI y UX/UI</h2>
        <span class="nos-dept__count">02</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card" data-author-slug="francisco-centeno">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">FC</div>
            <div class="nos-card__social">
              <a href="https://x.com/fcenteno_dev" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/francisco-centeno-dev" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Fran Zen</h3>
          <p class="nos-card__role">Desarrollador Full-Stack · Líder de Infraestructura</p>
          <p class="nos-card__bio">Gerente de TI y desarrollador full-stack con más de 10 años construyendo, manteniendo y asegurando plataformas digitales de alto tráfico, aplicaciones móviles y sistemas en tiempo real.</p>
          <span class="nos-card__location">Remoto</span>
        </div>

        <div class="nos-card" data-author-slug="ricardo-arce">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">RA</div>
            <div class="nos-card__social">
              <a href="https://x.com/ricardo_arce_d" aria-label="Twitter / X" target="_blank" rel="noopener">𝕏</a>
              <a href="https://linkedin.com/in/ricardo-arce-aburto" aria-label="LinkedIn" target="_blank" rel="noopener">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Ricardo Alberto Arce Aburto</h3>
          <p class="nos-card__role">Diseñador UX/UI</p>
          <p class="nos-card__bio">Diseñador gráfico y UX/UI con más de 8 años en comunicación visual. Especializado en plataformas editoriales y experiencias informativas.</p>
          <span class="nos-card__location">Costa Rica</span>
        </div>

      </div>
    </section>

    <?php /*
    ── PENDIENTES — fotos disponibles pero sin entrada en authors.js aún:
       johanna-baca, jose-denis-cruz, paula-carrion
       Agregar entrada en js/authors.js y luego añadir la tarjeta aquí.
    */ ?>

  </main><!-- /nos-roster -->

  <!-- ── SIDENAV DERECHA ── -->
  <aside class="nos-sidenav" aria-label="Ir a departamento">
    <span class="nos-sidenav__label">Equipo</span>
    <a href="#dir-general">Dirección General</a>
    <a href="#dir-proyectos">Dir. de Proyectos</a>
    <a href="#dir-editorial">Dir. Editorial</a>
    <a href="#audiovisual">Audiovisual</a>
    <a href="#distribucion">Distribución</a>
    <a href="#redaccion">Redacción</a>
    <a href="#ti-uxui">TI y UX/UI</a>
    <a href="#finanzas">Finanzas</a>
  </aside>

</div><!-- /nos-page-body -->


<!-- ── FINANZAS Y ASUNTOS FISCALES ── -->
<section class="nos-finance" id="finanzas">
  <div class="nos-finance__inner">
    <p class="nos-finance__dept">Finanzas y<br>Asuntos Fiscales</p>
    <div class="nos-finance__logo">R<em>&amp;</em>R</div>
    <div class="nos-finance__copy">
      <p>Los asuntos fiscales, contables y de cumplimiento legal de DIVERGENTES son gestionados por la firma R&amp;R, con sede en Costa Rica. Publicamos un informe financiero anual para garantizar la transparencia con nuestra audiencia y financiadores.</p>
      <a href="#" class="nos-finance__link">Ver informe financiero 2025 →</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>