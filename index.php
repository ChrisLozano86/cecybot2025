<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio | CECYTBOT 2025</title>
    <!-- Meta Open Graph -->
  <meta property="og:title" content="Torneo Estatal Robótica en Comonfort | CECYBOT 2025">
  <meta property="og:description" content="Torneo de Robótica CECYBOT2025">
  <meta property="og:url" content="https://www.cecybot2025.com">
  <meta property="og:type" content="website">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Estilo del container */
      .container {
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con opacidad */
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
      .video-overlay {
        position: relative;
        z-index: 1;
      }
    </style>
  </head>
  <body>
    <!-- Video de fondo desde servidor local -->
    <video class="video-background" autoplay muted loop>
      <source src="admin/assets/video/background.mp4" type="video/mp4">
      Tu navegador no soporta la reproducción de videos.
    </video>

    <div class="video-overlay">
      <div class="container" style="max-width: 90%;">
        <!-- Header -->
        <header class="bg-light py-3 text-center">
          <img src="admin/assets/img/banner1.jpg" style="width: 100%;" alt="CECYBOT 2025">
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
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Categorías y Reglamentos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Lugar del Evento</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

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
        <div class="row my-4">
          <div class="col-12 col-md-6">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.8479922020597!2d-100.75781242497752!3d20.716396380855937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ca9acd1000ee7%3A0x605826b31a6f3d6!2sCECyTE%20Guanajuato%20Plantel%20Comonfort%20I!5e0!3m2!1ses!2smx!4v1739211265427!5m2!1ses!2smx"
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

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-4">
          <p>&copy; 2025 Torneo Estatal de Robótica | CECYBOT225. CECyTE Guanajuto Plantel Comonfort.</p>
        </footer>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
