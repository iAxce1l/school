<?php
include("formular.php")
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Motoškola</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .gradient {
      background: rgb(63, 94, 251);
      background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgb(64, 50, 152) 100%);
    }

    h1,
    p,
    h2 {
      color: rgb(255, 255, 255);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="" width="70px">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Domov</a>
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
            <a class="nav-link text-black text-capitalize" href="phpmysqlregistracia/index.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="bg-secondary bg-gradient">
    <div class="d-flex">
      <div class="row m-4 justify-content-center align-items-center text-center">
        <div class="col-md-6">
          <h1>
            Motoškola Poprad
          </h1>
          <p>
            Ponúkame naše služby už 10 rokov.
          </p>
          <button type="button" class="btn btn-danger mb-3">Prehrať video</button>
        </div>
        <div class="col-md-6">
          <img src="./img/moto1.jpg" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
      </path>
    </svg>
  </section>

  <section class="bg-dark bg-gradient">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z">
      </path>
    </svg>
    <div>
      <div class="row m-4 justify-content-center align-items-center text-center">
        <div class="col-md-12">
          <h2>Najvýhodnejší kurz (A skupina)</h2>
        </div>
      </div>

      <div class="row m-4 justify-content-center align-items-center text-center">
        <div class="col-md-12">
          <p>V rámci vodičského kurzu získate:</p>
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col">
            <img src="./img/znak_fajfka.svg" alt="">
            <p>Praktické jazdy</p>
          </div>
          <div class="col">
            <img src="./img/znak_fajfka.svg" alt="">
            <p>Jazdy po dialnici</p>
          </div>
          <div class="col">
            <img src="./img/znak_fajfka.svg" alt="">
            <p>Učebné materiály</p>
          </div>
          <div class="col">
            <img src="./img/znak_fajfka.svg" alt="">
            <p>Kurz prvej pomoci</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 p-5 img-fluid rounded">
        <img src="./img/moto2.jpg" class="img-fluid rounded" alt="">
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
      </path>
    </svg>
  </section>

  <section class="bg-black bg-gradient">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z">
      </path>
    </svg>

    <div>
      <div class="row m-4 justify-content-center align-items-center text-center">
        <div class="col-md-12">
          <h2>Jazdy ma motocykloch podľa vášho výberu</h2>
        </div>
      </div>

      <div class="row m-4 justify-content-center align-items-center text-center">
        <div class="col-md-12">
          <p>K dispozícii sú najnovšie modely motocyklov svetových značiek.</p>
        </div>

        <div class="row m-4 justify-content-center align-items-center text-center">
          <div class="col-md-12">
            <button type="button" class="btn btn-light">Viac tu</button>

          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="row">
        <div class="col">
          <img class="img-fluid rounded mb-4" src="./img/moto3.jpg" alt="">
        </div>
        <div class="col">
          <img class="img-fluid rounded mb-4" src="./img/moto4.jpg" alt="">
        </div>
        <div class="col">
          <img class="img-fluid rounded mb-4" src="./img/moto5.jpg" alt="">
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
      </path>
    </svg>
  </section>


  <section class="bg-black">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z">
      </path>
    </svg>
    <div>
      <div class="container text-center">
        <div class="row">
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center rounded-circle"
              style="width: 50px; height: 50px; background-color: rgb(31, 31, 31);"><svg
                xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi bi-check2-circle"
                viewBox="0 0 16 16">
                <path fill="#FFFFFFFF" fill-opacity="1"
                  d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                <path fill="#FFFFFFFF" fill-opacity="1"
                  d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
              </svg></div>
            <h2>Skúsený tím inštruktorov</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium dolorum illo quia maiores quos,
              aliquid doloremque enim ex quod, iste recusandae architecto aut aspernatur doloribus et voluptates, sit
              dolor explicabo.</p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center rounded-circle"
              style="width: 50px; height: 50px; background-color: rgb(31, 31, 31);">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi bi-person-check-fill"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd" fill="#FFFFFFFF" fill-opacity="1"
                  d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path fill="#FFFFFFFF" fill-opacity="1"
                  d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
            </div>
            <h2>Individuálny prístup ku každému žiakovi</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa repellat deserunt dolor architecto id
              suscipit est sed aut, labore dolores natus neque aliquam? Quaerat ex dolorem quasi voluptas dicta
              perspiciatis.</p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center rounded-circle"
              style="width: 50px; height: 50px; background-color: rgb(31, 31, 31);">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path fill="#FFFFFFFF" fill-opacity="1"
                  d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
              </svg>
            </div>
            <h2>Altuálne učebné materiály</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure recusandae error quisquam enim quam,
              similique mollitia officia possimus fugiat sint natus. Magnam cum temporibus, consequatur atque ipsum
              adipisci ut veniam.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFFFFFFF" fill-opacity="1"
          d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
        </path>
      </svg>
  </section>


  <section class="bg-black">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z">
      </path>
    </svg>
    <div>
      <div class="container text-center">
        <div class="row">
          <h2>Priebeh výcviku u nás</h2>
          <p>Ozvite sa nám pomocou kontaktného formulára, ktorý nájdete v sekcii O nás a individuálne zostavíme výcvik
            na mieru. Priebeh klasického výcviku vyzerá následovne:</p>
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
            </div>
            <h2>Teoretický výcvik</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium dolorum illo quia maiores quos,
              aliquid doloremque enim ex quod, iste recusandae architecto aut aspernatur doloribus et voluptates, sit
              dolor explicabo.</p>
            <button type="button" class="btn btn-outline-warning">Aktuálne materiály</button>
            <img src="./img/teoreticka_vyucba.svg" style="height:25vh; padding-top: 10px;" alt="">
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
            </div>
            <h2>Jazdy na cvičisku</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa repellat deserunt dolor architecto id
              suscipit est sed aut, labore dolores natus neque aliquam? Quaerat ex dolorem quasi voluptas dicta
              perspiciatis.</p>
            <button type="button" class="btn btn-outline-warning">Poloha cvičiska</button>
            <img src="./img/cvicisko.svg" style="height:25vh; padding-top: 10px;" alt="">
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
            </div>
            <h2>Reálna premávka</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure recusandae error quisquam enim quam,
              similique mollitia officia possimus fugiat sint natus. Magnam cum temporibus, consequatur atque ipsum
              adipisci ut veniam.</p>
            <button type="button" class="btn btn-outline-warning">Okruhy jázd</button>
            <img src="./img/realna_premavka.svg" style="height:25vh; padding-top: 10px;" alt="">
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FFFFFFFF" fill-opacity="1"
          d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
        </path>
      </svg>
  </section>

  <section class="bg-black">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#FFFFFFFF" fill-opacity="1"
        d="M0,256L17.1,240C34.3,224,69,192,103,160C137.1,128,171,96,206,101.3C240,107,274,149,309,192C342.9,235,377,277,411,288C445.7,299,480,277,514,266.7C548.6,256,583,256,617,240C651.4,224,686,192,720,186.7C754.3,181,789,203,823,224C857.1,245,891,267,926,266.7C960,267,994,245,1029,229.3C1062.9,213,1097,203,1131,208C1165.7,213,1200,235,1234,245.3C1268.6,256,1303,256,1337,261.3C1371.4,267,1406,277,1423,282.7L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z">
      </path>
    </svg>

    <form style="width: 50%; transform: translateX(50%);" class="text-center text-white" method="POST" action="">
      <div class="form-group">
        <label for="Meno">Vaše meno</label>
        <input type="text" class="form-control" placeholder="Meno" name="meno">
      </div>
      <div class="form-group">
        <label for="Priezvisko">Vaše priezvisko</label>
        <input type="text" class="form-control" placeholder="Priezvisko" name="priezvisko">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Váš E-Mail</label>
        <input type="email" class="form-control" placeholder="email@email.com" name="email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Správa</label>
        <textarea class="form-control" placeholder="Vaša Správa" rows="3" name="sprava"></textarea>
      </div>
      <input type="submit" class="btn btn-danger m-4" value="Odoslať" name="submit">
    </form>
    <div class="col d-flex flex-column align-items-center justify-content-center">
      <img src="./img/kontakt.svg" alt="">
    </div>
  </section>

  <section>
    <div class="card">
      <div class="card-header justify-content-center align-items-center text-center text-black">
        <h5>Dávid Laufik 2023 ODP</h5>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>