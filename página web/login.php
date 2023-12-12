<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['usuario'] == 'devghost@gmail.com' and $_POST['senha'] == '123456'){
      $_SESSION['loggedin'] = true;
      header('location: index.php');
    }
    else $_SESSION['loggedin'] = false;
  }
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tecnobroccoli | Login</title>

    <!-- CSS Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="CSS/main.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
  </head>
  <body class="d-flex align-items-center py-4 login-bg">


    <main class="w-100 m-auto form-container bg-body-tertiary border-0 rounded-2 d-flex flex-column align-items-center">
      <form id="loginForm" method="POST" class="w-100">
        <a href="index.php" target="_self"><img src="img/logo/logo_PI_32x32.webp" alt="logo Tecnobroccoli" class="mb-4"></a>
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <div class="form-floating mb-1">
          <input type="email" name="usuario" class="form-control" id="floatingInput" placeholder="your-email@gmail.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-1">
          <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="password">
          <label for="floatingPassword">Senha</label>
        </div>
        <div class="form-check text-start my-3">
          <input type="checkbox" class="form-check-input" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Lembre de mim</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        <button class="btn btn-primary w-100 py-2 mt-2" type="button" onclick="showSignupForm()">Não tenho uma conta</button>
      </form>

      <form id="signupForm" class="w-100" style="display: none;">
        <a href="index.php" target="_self"><img src="img/logo/logo_PI_32x32.webp" alt="logo Tecnobroccoli" class="mb-4"></a>
        <h1 class="h3 mb-3 fw-normal">Criar conta</h1>
        <div class="form-floating mb-1">
          <input type="email" class="form-control" id="floatingInput" placeholder="your-email@gmail.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-1">
          <input type="password" class="form-control" id="floatingPassword" placeholder="password">
          <label for="floatingPassword">Senha</label>
        </div>
        <div class="form-floating mb-1">
          <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="confirm password">
          <label for="floatingConfirmPassword">Confirmar senha</label>
        </div>
        <div class="form-check text-start my-3">
          <input type="checkbox" class="form-check-input" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Lembre de mim</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="button" onclick="showLoginForm()">Já tenho uma conta</button>
        <button class="btn btn-primary w-100 py-2 mt-2" type="button" onclick="showSignupForm()">Criar conta</button>
      </form>

      <div class="text-center p-1" style="font-family: Arial, Helvetica, sans-serif;">
        <a><i>&COPY;2023 Copyright:<a class="DevGhost" href="https://github.com/frqnk/DSM.PI.2" target="_blank">DevGhost, Inc</i><span class="ghost">👻</span></i></a>
      </div>
    </main>

    <!-- JavaScript Bootstrap v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- JavaScript Personalizado -->
    <script src="JavaScript/scriptMain.js"></script>

    <!-- Scroll Smoth Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
      // Função para mostrar o formulário de login e esconder o de cadastro
      function showLoginForm() {
        document.getElementById("loginForm").style.display = "block";
        document.getElementById("signupForm").style.display = "none";
      }

      // Função para mostrar o formulário de cadastro e esconder o de login
      function showSignupForm() {
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("signupForm").style.display = "block";
      }

      $(document).ready(function(){
      // Add smooth scrolling to all links
        $("a").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
          } // End if
        });
      });
    </script>

    <!-- JavaScript Bootstrap v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- JavaScript Personalizado -->
    <script src="js/main.js" ></script>

    <!-- Scroll Smoth Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>
</html>

