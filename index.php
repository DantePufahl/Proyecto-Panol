
<?php

session_start();

if(isset($_SESSION['user'])) {

  echo '<script>
    alert("La sesión ya está iniciada");
    window.location = "pages/orders.php";
  </script>';
} 

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>

  <link rel="shortcut icon" href="assets/icons/logo.svg" type="image/x-icon">

  <title>Pañol - Login</title>
</head>

<body>

  <section class="section__container">
    <div class="card__container">
      <div class="image__content">
        <img
          src="assets/icons/image-login.avif"
          alt="martillo" class="image__img" />
      </div>
      <div class="form__content">
        <form class="form" id="form">
          <div class="form__title-div">
            <h2 class="form__title">Inicia sesión</h2>
            <img class="form__logo" src="assets/icons/logo.svg" alt="logo">
          </div>
          
          <div class="form__container">

            <p class="msg" id="msg">Nombre de usuario o contraseña incorrecta</p>
            <div class="form__group">
              <input type="text" id="username" class="form__input" name="user_name" value="Admin"/>
              <label for="name" >Nombre de usuario</label>
            </div>
            <div class="form__group">
              <input type="password" id="password" class="form__input" name="password" value="123"/>
              <label for="name">Contraseña</label>
            </div>
            
            <a href="password_forgotten.php" class="forgo_pass"> ¿Olvidaste tu contraseña?</a>
            <input type="submit" class="form__submit" value="Iniciar sesion">
          </div>
        </form>
      </div>
    </div>
  </section>

  <script src="assets/js/label.js"></script>
  <script src="assets/js/login.js"></script>
</body>

</html>
