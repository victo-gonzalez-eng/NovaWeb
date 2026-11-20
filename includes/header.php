<?php
$currentPage = basename($_SERVER["PHP_SELF"]);
$pageTitle = $pageTitle ?? "NovaWeb";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="NovaWeb: soluciones digitales, diseño y desarrollo web.">
  <title><?= htmlspecialchars($pageTitle) ?> | NovaWeb</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="index.php" aria-label="NovaWeb, inicio"><span class="brand-mark">N</span><span>nova<span class="brand-light">web</span></span></a>
    <button class="menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span></span></button>
    <nav class="main-nav" id="main-nav" aria-label="Navegación principal">
      <a class="<?= $currentPage === "index.php" ? "active" : "" ?>" href="index.php">Inicio</a>
      <a class="<?= $currentPage === "nosotros.php" ? "active" : "" ?>" href="nosotros.php">Nosotros</a>
      <a class="<?= $currentPage === "servicios.php" ? "active" : "" ?>" href="servicios.php">Servicios</a>
      <a class="nav-contact <?= $currentPage === "contacto.php" ? "active" : "" ?>" href="contacto.php">Contacto <span aria-hidden="true">↗</span></a>
    </nav>
  </div>
</header>
