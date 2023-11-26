<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['usuario'] == 'devghost' and $_POST['senha'] == 'coffee') {
      $_SESSION['loggedin'] = true;
      header('location: painel_de_controle.php');
    }
    else $_SESSION['loggedin'] = false;
  }
?>