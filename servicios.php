<?php
$pageTitle = "Servicios";
require_once __DIR__ . "/includes/header.php";
$services = [
  ["01", "Desarrollo de sitios web", "Construcción de páginas informativas y sitios institucionales con estructura clara y navegación sencilla."],
  ["02", "Diseño responsive", "Adaptación de la interfaz para ofrecer una experiencia consistente en computadores, tabletas y teléfonos."],
  ["03", "Formularios dinámicos", "Recepción y validación de información mediante formularios procesados en PHP."],
  ["04", "Mantenimiento web", "Actualización de contenidos, revisión de enlaces y corrección de errores de funcionamiento."]
];
?>
<main>
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow">Nuestros servicios</span>
      <h1>Soluciones pensadas para cada necesidad.</h1>
      <p>Componentes y funcionalidades que trabajan en conjunto para construir una presencia digital sólida.</p>
    </div>
  </section>
  <section class="section">
    <div class="container service-list">
      <?php foreach ($services as $service): ?>
        <article class="service-row">
          <span class="service-index"><?= htmlspecialchars($service[0]) ?></span>
          <div>
            <h2><?= htmlspecialchars($service[1]) ?></h2>
            <p><?= htmlspecialchars($service[2]) ?></p>
          </div>
          <span class="service-arrow" aria-hidden="true">↗</span>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="section section-cta">
    <div class="container cta-content">
      <div><h2>¿Tienes un proyecto en mente?</h2><p>Cuéntanos qué necesitas y conversemos sobre tu idea.</p></div>
      <a class="btn btn-light" href="contacto.php">Solicitar información</a>
    </div>
  </section>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>
