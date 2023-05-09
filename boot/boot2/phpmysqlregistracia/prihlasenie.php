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
  session_start();
  require('databaza.php');
  // Keď sa formulár odošle, overí sa či používateľ existuje v databáze a overí sa jeho heslo
  if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Získa používateľské dáta z databázy
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if ($username === "admin" && $password === "admin123") {
      $_SESSION['username'] = $username;
      header("Location: admindashboard.php");
      exit();
    } else if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $username;
      header("Location: dashboard.php");
      exit();
    } else {
      echo "<div class='form'>
                <h3>Nesprávne meno alebo heslo !</h3><br/>
                <p class='link'>Skúste sa znova <a href='prihlasenie.php'>prihlásiť.</a></p>
              </div>";
    }
  } else {
    ?>

    <form class="form" method="post">
      <h1 class="login-title">Prihlásenie</h1>
      <input type="text" class="login-input" name="username" placeholder="Meno" required />
      <input type="password" class="login-input" name="password" placeholder="Heslo" required />
      <input type="submit" name="submit" value="Login" class="login-button">
      <p class="link">Ešte nemáte účet ? <a href="registracia.php">Zaregistrujte sa !</a></p>
    </form>
    <?php
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>