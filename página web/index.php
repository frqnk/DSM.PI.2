<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bem-vindo à Tecnobroccoli | Home</title>

    <!-- CSS Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/clock.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-3"data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand grow-up" href="mainPage.html" target="_self">🥦Tecnobroccoli</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active grow-up" aria-current="page" href="#home" target="_self">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active grow-up" href="sobre.html" target="_self">Sobre</a>
            </li>
            <li class="nav-item dropdown active grow-up">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Colaboradores do GitHub
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://github.com/Brubzie" target="_blank">Bruno</a></li>
                  <li><a class="dropdown-item" href="https://github.com/frqnk" target="_blank">Frank, <i>"schler...esquece"</i></a></li>
                  <li><a class="dropdown-item" href="https://github.com/matheusldsguedes" target="_blank">Matheus, <i>"Mathias"</i></a></li>
                  <li><a class="dropdown-item" href="https://github.com/LucasFerreira514" target="_blank">Lucas Ferreira, <i>o "Ferreiro"</i></a></li>
                  <li><a class="dropdown-item" href="" target="_blank">Lucas Arantes, o do café</a></li>
                  <li><a class="dropdown-item" href="https://github.com/LeandroAlves1987" target="_blank">Leandro, <i>"Leandrin"</i></a></li>
                  <li><a class="dropdown-item" href="https://github.com/" target="_blank">Miguel Barbieri</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Fim Navbar -->

    <!-- Boas-vindas -->
    <div class="jumbotron welcome-section text-light mt-5 mb-5">
      <div class="container-fluid d-flex align-items-center">
        <div class="mx-auto">
          <h1 class="display-4">Bem-Vindo à <span class="Tecnobroccoli">Tecnobroccoli</span></h1>
          <p class="lead">Uma plataforma dedicada à te deixar sempre atualizado sobre sua saúde e bem-estar, físico e mental.</p>
          <a class="btn btn-outline-light border-0 btn-lg btn-custom rounded-pill font-monospace letterspace-grow" href="#inicio">Explore nosso conteúdo!</a>
        </div>
      </div>
    </div>
    <!-- Fim das Boas-vindas -->

    <div class="container-fluid">
      <div class="row justify-content-around">
        <!-- Card 01 -->
        <div class="col-md-5 moldura" id="inicio">
          <div class="card" style="max-width: 540px;">
            
          </div>

          <!-- Texto Abaixo -->
          <h1>H1</h1>
        </div>
        <div class="col-md-5 moldura">
          <h1 class="text-center">Hello</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <div class="row justify-content-around">
        <!-- Card 03 -->
        <div class="col-sm-4 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="img/medicos.jpg" class="card-img-top" alt="Médicos">
            <div class="card-body">
              <h4 class="card-title">Nossos Especialistas</h4>
              <p class="card-text lead">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success rounded-pill font-monospace">Saiba mais</a>
            </div>
          </div>
        </div>
        <!-- Card 03 - End -->
        
        <!-- Card 04 -->
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="img/adm.jpg" class="card-img-top" alt="Administradores da Página">
            <div class="card-body">
              <h4 class="card-title">Administração da página</h4>
              <p class="card-text lead">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success rounded-pill font-monospace">Saiba mais</a>
            </div>
          </div>
        </div>
        <!-- Card 04 - End-->
      </div>
    </div>
    
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-theme="dark">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/SLIDE1.jpg" class="d-block w-100" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img src="img/SLIDE2.jpg" class="d-block w-100" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img src="img/SLIDE3.jpg" class="d-block w-100" alt="Terceiro Slide">
        </div>
        <div class="carousel-item">
          <img src="img/SLIDE4.jpg" class="d-block w-100" alt="Quarto Slide">
        </div>
        <div class="carousel-item">
          <img src="img/SLIDE5.jpg" class="d-block w-100" alt="Quinto Slide">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" title="Anterior" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" title="Próximo" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <!-- Carousel - End -->

    <!-- Footer -->
    <footer class="bg-dark text-center text-white mt-5">
      <!-- Grid container -->
      <div class="container p-4">
        <h4 class="text-white">Nossas Redes Sociais</h4>
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1 social-media" href="https://www.facebook.com/" target="_blank" role="button">
            <i class="bi bi-facebook"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg></i>
          </a>

          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1 social-media" href="https://twitter.com/home?lang=pt" target="_blank" role="button">
            <i class="bi bi-twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg></i>
          </a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1 social-media" href="https://www.instagram.com/" target="_blank" role="button">
            <i class="bi bi-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></i>
          </a>
        <!-- Section: Social Media - End -->

        <!-- Section: Text -->
        <section class="mb-2">
          <p class="lh-sm">
            O projeto <span class="Tecnobroccoli">Tecnobroccoli</span> consiste em um site informativo dedicado à criação e divulgação de artigos e postagens relacionadas ao setor de saúde, com a finalidade de promover o conhecimento e incentivar um estilo de vida saudável entre os visitantes. Além disso, foram incorporadas ferramentas web específicas para a saúde, fortalecendo ainda mais nossa missão.
          </p>
        </section>
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-1 rounded-1" style="background-color: rgba(0, 0, 0, 0.2); font-family: monospace">
        <i>&COPY;2023 Copyright:<a class="DevGhost" href="https://github.com/frqnk/DSM.PI.2" target="_blank">DevGhost, Inc</i><span class="ghost">👻</span></a>
      </div>
      <!-- Copyright - End -->
    </footer>
    <!-- Footer - End -->

    <!-- Relógio -->
    <div class="clock" id="clock"></div>

    <!-- JavaScript Bootstrap v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- JavaScript Personalizado -->
    <script src="js/main.js"></script>

    <!-- Scroll Smoth Script (Script de Rolagem Suave) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        // Adiciona rolagem suave para todos os links
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Usando jQuery's animate() metodo para adicionar rolagem de página suave
            // O número opcional (800) especifica o número de milisegundos usados para rolar para a área especificada
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
                // Adicona hashtag (#) ao URL para o scroll se mover (default click behavior)
                window.location.hash = hash;
            });
          }
        });
      });
    </script>

  </body>
</html>