<?php
$pageTitle = "Inicio";
require_once __DIR__ . "/includes/header.php";
?>
<main>
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-copy">
        <span class="eyebrow">Soluciones digitales para crecer</span>
        <h1>Impulsamos tus ideas con <span>tecnología</span></h1>
        <p>Diseñamos experiencias web claras, modernas y funcionales para que tu negocio tenga presencia en internet.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="servicios.php">Conocer servicios</a>
          <a class="btn btn-outline" href="contacto.php">Contáctanos</a>
        </div>
      </div>
      <div class="hero-card" aria-label="Panel ilustrativo de servicios digitales">
        <div class="window-bar"><i></i><i></i><i></i><span>panel digital</span></div>
        <div class="mockup-content">
          <div class="mockup-label">PROYECTO WEB</div>
          <div class="mockup-line wide"></div>
          <div class="mockup-line"></div>
          <div class="mockup-stats">
            <div><strong>01</strong><small>Diseño</small></div>
            <div><strong>02</strong><small>Desarrollo</small></div>
            <div><strong>03</strong><small>Entrega</small></div>
          </div>
          <div class="mockup-chart"><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-heading">
        <span class="eyebrow">Qué hacemos</span>
        <h2>Herramientas para llevar tu negocio más lejos</h2>
        <p>Integramos diseño y desarrollo para crear soluciones digitales útiles.</p>
      </div>
      <div class="cards">
        <article class="service-card">
          <div class="card-icon">⌘</div>
          <h3>Desarrollo web</h3>
          <p>Sitios web organizados, rápidos y adaptables a diferentes dispositivos.</p>
          <a href="servicios.php">Ver detalles <span aria-hidden="true">→</span></a>
        </article>
        <article class="service-card">
          <div class="card-icon">✦</div>
          <h3>Diseño de interfaces</h3>
          <p>Experiencias visuales intuitivas que facilitan la navegación de los usuarios.</p>
          <a href="servicios.php">Ver detalles <span aria-hidden="true">→</span></a>
        </article>
        <article class="service-card">
          <div class="card-icon">▤</div>
          <h3>Soporte y mantenimiento</h3>
          <p>Acompañamiento para mantener los contenidos y funcionalidades actualizados.</p>
          <a href="servicios.php">Ver detalles <span aria-hidden="true">→</span></a>
        </article>
      </div>
    </div>
  </section>

  <section class="section section-soft">
    <div class="container split">
      <div>
        <span class="eyebrow">Nuestro enfoque</span>
        <h2>La tecnología debe hacer las cosas más sencillas.</h2>
      </div>
      <div>
        <p>Trabajamos con procesos claros: entendemos la necesidad, definimos la estructura, desarrollamos los componentes y verificamos su funcionamiento antes de publicar.</p>
        <a class="text-link" href="nosotros.php">Conoce nuestro proceso <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>
