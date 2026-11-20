# NovaWeb — Proyecto académico PHP

Sitio web multipágina desarrollado como ejercicio de componentes frontend y PHP.

## Tecnologías
- HTML5: estructura semántica.
- CSS3: estilos y diseño responsive.
- PHP: inclusión de componentes reutilizables, generación dinámica del año y validación del formulario.
- JavaScript: menú móvil.

## Estructura
- `index.php`: página principal.
- `nosotros.php`: información del proyecto.
- `servicios.php`: listado de servicios generado con un ciclo PHP.
- `contacto.php`: formulario con validación del lado del servidor.
- `includes/header.php`: encabezado y navegación reutilizable.
- `includes/footer.php`: pie de página reutilizable.
- `css/estilos.css`: estilos.
- `js/script.js`: interacción del menú.

## Ejecutar con XAMPP
1. Copiar la carpeta `proyecto_php_sena` dentro de `C:/xampp/htdocs/`.
2. Abrir el panel de XAMPP e iniciar Apache.
3. En el navegador ingresar: `http://localhost/proyecto_php_sena/`.

No requiere base de datos. El formulario valida los datos con PHP y muestra una confirmación en pantalla; esta versión académica no envía correos ni almacena información.

## Publicar en GitHub
Crear un repositorio llamado `proyecto-php-sena`, subir el contenido de esta carpeta y compartir la URL del repositorio.
