<?php
$pageTitle = "Contacto";
$errors = [];
$success = false;
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "") $errors[] = "Escribe tu nombre.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Escribe un correo electrónico válido.";
    if ($subject === "") $errors[] = "Escribe el asunto de tu mensaje.";
    if (strlen($message) < 10) $errors[] = "El mensaje debe tener al menos 10 caracteres.";

    if (!$errors) {
        // En esta versión académica se confirma la recepción en pantalla.
        // No se envía correo ni se almacena información en una base de datos.
        $success = true;
        $name = $email = $subject = $message = "";
    }
}
require_once __DIR__ . "/includes/header.php";
?>
<main>
  <section class="page-hero">
    <div class="container">
      <span class="eyebrow">Hablemos</span>
      <h1>Cuéntanos sobre tu proyecto.</h1>
      <p>Completa el formulario y verás la validación de los datos realizada con PHP.</p>
    </div>
  </section>
  <section class="section">
    <div class="container contact-grid">
      <div class="contact-info">
        <h2>Estamos para ayudarte</h2>
        <p>Comparte tu idea, una pregunta o los detalles del servicio que necesitas.</p>
        <div class="contact-detail"><span>Correo</span><strong>hola@novaweb.test</strong></div>
        <div class="contact-detail"><span>Horario</span><strong>Lunes a viernes · 8:00 a. m. – 5:00 p. m.</strong></div>
        <div class="contact-detail"><span>Ubicación</span><strong>Medellín, Colombia</strong></div>
      </div>
      <div class="form-panel">
        <?php if ($success): ?>
          <div class="alert alert-success" role="status">
            <strong>¡Formulario validado!</strong>
            <p>Gracias, <?= htmlspecialchars($_POST["name"] ?? "", ENT_QUOTES, "UTF-8") ?>. Los datos fueron recibidos correctamente por PHP en esta demostración.</p>
          </div>
        <?php endif; ?>
        <?php if ($errors): ?>
          <div class="alert alert-error" role="alert">
            <strong>Revisa la información:</strong>
            <ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error) ?></li><?php endforeach; ?></ul>
          </div>
        <?php endif; ?>
        <form method="POST" action="contacto.php" novalidate>
          <div class="form-row">
            <label for="name">Nombre completo</label>
            <input id="name" name="name" type="text" value="<?= htmlspecialchars($name) ?>" placeholder="Tu nombre" required>
          </div>
          <div class="form-row">
            <label for="email">Correo electrónico</label>
            <input id="email" name="email" type="email" value="<?= htmlspecialchars($email) ?>" placeholder="nombre@correo.com" required>
          </div>
          <div class="form-row">
            <label for="subject">Asunto</label>
            <input id="subject" name="subject" type="text" value="<?= htmlspecialchars($subject) ?>" placeholder="¿En qué podemos ayudarte?" required>
          </div>
          <div class="form-row">
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" rows="5" placeholder="Escribe tu mensaje (mínimo 10 caracteres)" required><?= htmlspecialchars($message) ?></textarea>
          </div>
          <button class="btn btn-primary btn-submit" type="submit">Enviar mensaje <span aria-hidden="true">→</span></button>
        </form>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . "/includes/footer.php"; ?>
