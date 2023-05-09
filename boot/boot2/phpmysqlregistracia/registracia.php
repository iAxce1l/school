<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Motoškola</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    /* Fonty */
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');

    /* Farby */
    :root {
      /*root je odkaz na tzv. koreňový prvok dokumentu - v preklade, zadefinované farby sa dajú zavolať hocikde na stránke príkazom var*/
      --primary-color: #626161;
      --secondary-color: #ffffff;
      --accent-color: #42bc97;
    }

    html,
    body {
      height: 100%;
      width: 100%;
      margin: 0;
    }

    /* Základné nastavenia */
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: var(--primary-color);
      color: var(--secondary-color);
    }

    /* Formulár */
    .form {
      color: var(--primary-color);
      border-radius: 10px;
      text-align: center;
      height: 30%;
      color: var(--secondary-color);
    }

    /* Názov formulára */
    h1.login-title {
      font-size: 30px;
      font-weight: 800;
      text-align: center;
      text-transform: uppercase;
      color: var(--secondary-color);
      padding: 15px;
    }

    /* Vstupné polia */
    .login-input {
      box-sizing: border-box;
      /*zabrani pretekaniu cez hlavny kontajner*/
      border: 2px solid black;
      border-radius: 5px;
      font-size: 15px;
      width: 70%;
      height: 30%;
      padding: 10px;
      margin: 10px;
    }

    .login-input:focus {
      border-color: var(--accent-color);
      box-shadow: 0px 0px 3px 0px rgba(85, 161, 255, 0.5);
      outline: none;
    }

    /* Tlačidlo prihlásenia */
    .login-button {
      width: 30%;
      height: 60px;
      margin: 10px;
      background-color: var(--accent-color);
      border: none;
      border-radius: 5px;
      color: var(--secondary-color);
      cursor: pointer;
      font-size: 16px;
      text-transform: uppercase;
      transition: background-color 0.3s ease-in-out;
    }

    .login-button:hover {
      background-color: #7b95c9;
    }

    /* Odkazy */
    .link {
      color: #999;
      font-size: 14px;
      text-align: center;
    }

    .link a {
      color: #999;
      text-decoration: none;
    }

    .link a:hover {
      color: #555;
    }

    /* Upozornenia */
    h3 {
      color: #ff5252;
      font-weight: normal;
      text-align: center;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="" width="70px">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-black text-capitalize" href="../index.php">Domov</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Predstavenie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Motocykle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Kurzy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">O nás</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black text-capitalize">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  require('databaza.php');
  // Keď je formulár odoslaný (submit), vložia sa (insert) zadané hodnoty do databázy
  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Skontroluje sa či meno alebo email už náhodou neexistujú v databáze
    $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='form'>
                <h3>Meno alebo email už existuje.</h3><br/>
                <p class='link'>Kliknite sem a <a href='registration.php'>registrujte sa</a> znova.</p>
              </div>";
    } else {
      // Vytvorenie hash hodnoty hesla a uloženie hash hodnoty do databázy
      $password_hashed = password_hash($password, PASSWORD_DEFAULT);
      $create_datetime = date("Y-m-d H:i:s");
      $query = "INSERT INTO users (username, password, email, create_datetime)
                  VALUES ('$username', '$password_hashed', '$email', '$create_datetime')";
      $result = mysqli_query($con, $query);
      if ($result) {
        echo "<div class='form'>
                    <h3>Úspešne ste sa zaregistrovali !</h3><br/>
                    <p class='link'>Kliknite sem pre <a href='prihlasenie.php'>prihlásenie.</a></p>
                  </div>";
      } else {
        echo "<div class='form'>
                    <h3>Niečo sa pokazilo. Prosím skúste sa zaregistrovať znova.</h3><br/>
                    <p class='link'>Kliknite sem pre opakovanú <a href='registracia.php'>registráciu.</a></p>
                  </div>";
      }
    }
  } else {
    ?>
    <form class="form" method="post">
      <h1 class="login-title">Registrácia</h1>
      <input type="text" class="login-input" name="username" placeholder="Meno" required />
      <input type="email" class="login-input" name="email" placeholder="Email" required />
      <input type="password" class="login-input" name="password" placeholder="Heslo" required />
      <input type="submit" name="submit" value="Register" class="login-button">
      <p class="link">Máte už účet ? <a href="prihlasenie.php">Prihlásenie</a></p>
    </form>

    <?php
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>