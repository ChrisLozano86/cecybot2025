<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Página de Evento" />
    <meta property="og:description" content="Información sobre el evento, categorías, reglamentos y ubicación." />
    <meta property="og:image" content="https://via.placeholder.com/1200x630" />
    <meta property="og:url" content="https://www.tuevento.com/pagina-evento" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Página de Evento" />
    <meta name="twitter:description" content="Toda la información sobre nuestro próximo evento." />
    <meta name="twitter:image" content="https://via.placeholder.com/1200x630" />
    <title>Página de Evento</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Estilo del container */
      .container {
        background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      /* Estilo de video de fondo */
      .video-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
      }

      /* Animaciones para las tarjetas */
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card:hover {
        transform: scale(1.1) translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }

      /* Colores de ejemplo para tarjetas */
      .card:nth-child(1) {
        background-color: #ffcccc;
      }
      .card:nth-child(2) {
        background-color: #ccffcc;
      }
      .card:nth-child(3) {
        background-color: #ccccff;
      }
      .card:nth-child(4) {
        background-color: #ffffcc;
      }

      .video-overlay {
        position: relative;
        z-index: 1;
      }

      /* Scroll suave */
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <!-- Video de fondo desde servidor local -->
    <video class="video-background" autoplay muted loop>
      <source src="videos/fondo.mp4" type="video/mp4">
      Tu navegador no soporta la reproducción de videos.
    </video>

    <div class="video-overlay">
      <div class="container" style="max-width: 90%;">
        <!-- Header -->
        <header class="bg-light py-3 text-center">
          <h1>Banner Publicitario</h1>
        </header>

        <!-- Navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#inicio">Bases de la competencia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#categorias">Categorías y Reglamentos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#lugar">Lugar del Evento</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Sección Inicio -->
        <section id="inicio" class="my-5">
          <h2>Bienvenido</h2>
          <p>El CECyTE Guanajuato Unidad COMONFORT tiene la intención de crear y fomentar el interés en el amplio mundo de la robótica y la electrónica en todo el alumnado de nuestro plantel así como a los estudiantes de nuestro municipio y municipios aledaños, por lo que estamos invitándolos a participar el día <span class="font-weight-bold">21 de mayo de 2025 </span> en el Primer Torneo de Robótica y Simposium (CECyBOT Comonfort 2025) en las siguientes</p>
        </section>

        <!-- Sección Categorías -->
        <section id="categorias" class="my-5">
          <h2>Categorías y Reglamentos</h2>
          <p>Descripción de categorías y reglamentos.</p>
        </section>

        <!-- Tarjetas en columnas -->
        <div class="row text-center my-4">
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 1">
              <div class="card-body">
                <h5 class="card-title">Título 1</h5>
                <p class="card-text">Descripción breve de la tarjeta 1.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 2">
              <div class="card-body">
                <h5 class="card-title">Título 2</h5>
                <p class="card-text">Descripción breve de la tarjeta 2.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 3">
              <div class="card-body">
                <h5 class="card-title">Título 3</h5>
                <p class="card-text">Descripción breve de la tarjeta 3.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 4">
              <div class="card-body">
                <h5 class="card-title">Título 4</h5>
                <p class="card-text">Descripción breve de la tarjeta 4.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Google Maps y Dirección -->
        <div class="row my-4" id="lugar">
          <div class="col-12 col-md-6">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093945!2d144.9537363156783!3d-37.816279779751595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1fdf3b1%3A0x5045675218ce6e0!2zTWVsYm91cm5lLCBBdXN0cmFsaWE!5e0!3m2!1ses!2ses!4v1618471405976!5m2!1ses!2ses"
              width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            ></iframe>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center">
            <p>
              Dirección del evento: Calle Falsa 123, Colonia Ejemplo, Ciudad de
              Prueba, CP 12345.
            </p>
          </div>
        </div>

        <!-- Sección de Contacto -->
        <section id="contacto" class="my-5">
          <h2>Contacto</h2>
          <p>Información de contacto para el evento.</p>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-4">
          <p>&copy; 2025 Evento Ejemplo. Todos los derechos reservados.</p>
        </footer>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
