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
    <title>CECYBOT 2025</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Estilo del fondo general */
      body {
        background-color: #005B97;
      }

      /* Estilo del container */
      .container {
        background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      /* Estilo de la barra de navegación */
      .navbar {
        background-color: #005B97 !important;
      }

      .navbar .nav-link, .navbar-toggler-icon {
        color: white !important;
      }

      /* Animaciones para las tarjetas */
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: white;
        margin-bottom: 20px;
      }

      .card:hover {
        transform: scale(1.1) translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }

      /* Colores de ejemplo para tarjetas */
      .card:nth-child(1) {
        background-color: #005B97;
      }
      .card:nth-child(2) {
        background-color: #005B97;
        
      }
      .card:nth-child(3) {
        background-color: #005B97;
        
      }
      .card:nth-child(4) {
        background-color: #005B97;
        
      }
    </style>
  </head>
  <body>
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
          <p>El CECyTE Guanajuato Unidad COMONFORT tiene la intención de crear y fomentar el interés en el amplio mundo de la robótica y la electrónica en todo el alumnado de nuestro plantel así como a los estudiantes de nuestro municipio y municipios aledaños, por lo que estamos invitándolos a participar el día <span class="font-weight-bold">21 de mayo de 2025 </span> en el Primer Torneo de Robótica y Simposium (CECyBOT Comonfort 2025) </p>
          <p>Descarga aquí las bases del evento <a href="admin/assets/files/Bases_CECyBOT_2025.pdf" download="Bases_CECyBOT_2025.pdf"> <img src="admin/assets/img/bases.png" style="width: 100px; height: auto;"> </a></p>        
        </section>

        <!-- Sección Categorías -->
        <section id="categorias" class="my-5">
          <h2>Categorías y Reglamentos</h2>
          <p>Consulta y descarga los reglamentos de cada categoría,</p>
        </section>

        <!-- Tarjetas en columnas -->
        <div class="row text-center my-4">
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 1">
              <div class="card-body">
                <h5 class="card-title">Mini Sumo RC</h5>
                <p class="card-text">¡Fuerza, estrategia y velocidad! ¿Tu robot tiene lo necesario para dominar el ring?.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 2">
              <div class="card-body">
                <h5 class="card-title">Robot Soccer</h5>
                <p class="card-text"> ¡Acción y precisión en cada jugada! Diseña el mejor equipo y conquista la cancha.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md">
            <div class="card">
              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen 3">
              <div class="card-body">
                <h5 class="card-title">Seguidor de Línea Educativo</h5>
                <p class="card-text">¡Velocidad y precisión al límite! Solo los más rápidos y exactos llegarán a la meta.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md">
            <div class="card">
            <h5 class="card-title" style="padding-top: 20px;">Seguidor de Línea Profesional</h5>
              <img src="admin/assets/img/seguidor_pro.png" class="card-img-top" alt="Seguidor Linea Profesional" style="width: 80%; margin-left: 10%;">
              <div class="card-body" style="padding-top: 30px;">
                <p class="card-text">¡Velocidad, control y máxima precisión! Solo los mejores trazan el camino hacia la victoria.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Google Maps y Dirección -->
        
        <div class="row my-4" id="lugar">
        <h2>Lugar del evento</h2>
          <div class="col-12 col-md-8">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.7470952180643!2d-100.75585082529375!3d20.72049199829621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ca9b299c9635d%3A0xb1ffb8f576e1ffc3!2sSalon%20Quinta%20Caporales!5e0!3m2!1ses-419!2smx!4v1741566480979!5m2!1ses-419!2smx"
              width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            ></iframe>
          </div>
          <div class="col-12 col-md-4 text-center">
            <div style="margin-top: 20px;">
            <h4>Salón Quinta Caporales</h4>
            <p>San Francisco, 38204 Comonfort, Gto.</p>
            </div>
            <img src="admin/assets/img/location.png" style="width: 20%; height: auto;">
          </div>
        </div>

        <!-- Sección de Contacto -->
        <section id="contacto" class="my-5">
          <h2>Contacto</h2>
          <p>Información de contacto para el evento.</p>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3 mt-4">
          <p>&copy; 2025 Primer Torneo de Robótica y Simposio. CECYBOT 2025</p>
          <p> CECYTEG Unidad Académica Comonfort. Todos los derechos reservados.</p>
        </footer>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
