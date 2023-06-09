<?php
if (isset($_POST['submit'])) {
  $to = "laufik@davidlaufik.studenthosting.sk";
  $from = $_POST['email'];
  $first_name = $_POST['meno'];
  $subject = "Odosielatel" . "\r\n" . $first_name . "\r\n" .  "(" . $from . ")";
  $message = $_POST['sprava'];

  $header_array = [
      "Content-type: text/html; charset=UTF-8",
      "From" . $from
  ];

  $headers = implode("\r\n", $header_array);
  mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SSOSTA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../styles/style.css">
</head>

<body class="bg-dark">
  <nav class="navbar navbar-expand-lg bg-body border-bottom border-white" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.html">
        <img src="../../img/logo-removebg-preview.png" width="52px" alt="" />
        SSOSTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pre žiakov
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="./novinky.html">Novinky</a>
              </li>
              <li>
                <a class="dropdown-item" href="./rozvrh.html">Rozvrh hodín</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              O škole
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="../oskole/profil.html">Profil školy</a>
              </li>
              <li>
                <a class="dropdown-item" href="../oskole/hodnoty.html">Naše hodnoty</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pre uchádzačov
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="../preuchadzacov/programy.html">Študijné programy</a>
              </li>
              <li>
                <a class="dropdown-item" href="../preuchadzacov/prijimacky.html">Prijímacie konanie</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Život na škole
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="../naskole/fotoalbum.html">Fotoalbum</a>
              </li>
              <li>
                <a class="dropdown-item" href="../naskole/erasmus.html">Erasmus+</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kontakty
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#">Škola</a>
              </li>
              <li>
                <a class="dropdown-item" href="./intrak.php">Internát</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <a class="nav-link" clas="invert" aria-current="page" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="grey" class="bi bi-person"
              viewBox="0 0 16 16">
              <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
            </svg>
          </a>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button type="button" class="btn btn-primary" id="liveAlertBtn" data-bs-toggle="tooltip"
              data-bs-placement="bottom" data-bs-title="Vyhľadaj">
              Search
            </button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-white"><a href="../../index.html">Domov</a></li>
      <li class="breadcrumb-item text-white"><a href="#">Kontakty</a></li>
      <li class="breadcrumb-item active text-white" aria-current="page">Škola</li>
    </ol>
  </nav>

  <div class="position-absolute top-10 start-50 translate-middle-x pt-3 position-absolute z-3"
    id="liveAlertPlaceholder"></div>


  <section class="pt-2">
    <div class="container text-center">
      <div class="row">
        <div class="col text-white">
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
              <path
                d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z" />
            </svg>
            <h5 class="p-0 m-0">Meno školy</h5>
          </div>
          <p>
            Súkromná stredná odborná škola, Ul. 29. augusta 4812, 058 01
            Poprad
          </p>
          <div class="d-flex justify-content-center align-items-center"> <svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-inboxes-fill" viewBox="0 0 16 16">
              <path
                d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z" />
            </svg>
            <h5 class="p-0 m-0">Email školy</h5>
          </div>
          <p>riaditel@tatranskaakademia.sk</p>
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
            <h5 class="p-0 m-0"> Telefón</h5>
          </div>
          <p>
            sekreteriát : 0918 345 990 <br />
            riaditeľka : 0905 298 655 <br />
            zriaďovateľ : 0905 716 376
          </p>
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
            </svg>
            <h5 class="m-0 p-0">Adresa školy</h5>
          </div>
          <p>
            Ul. 29. augusta 4812, 058 01 Poprad <br />
            Slovakia
          </p>
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
              <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg>
            <h5 class="p-0 m-0">IČO</h5>
          </div>
          <p>42039371</p>
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
              <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg>
            <h5 class="p-0 m-0">DIČ</h5>
          </div>
          <p>2022674016</p>
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
              <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg>
            <h5 class="p-0 m-0">Číslo účtu</h5>
          </div>
          <p>SK82 0900 0000 0004 9314 8176</p>
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
              <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </svg>
            <h5 class="p-0 m-0">Štatutárny zástupca</h5>
          </div>
          <p>Ing. Beáta Mitická - riaditeľka</p>
        </div>
        <div class="col" id="mapka">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2614.6126707209537!2d20.27764297681359!3d49.05598778678018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e3ab9f316877f%3A0xacb6328ecb3f4ec4!2zU8O6a3JvbW7DoSBzdHJlZG7DoSBvZGJvcm7DoSDFoWtvbGEgKFNTT1NUQSk!5e0!3m2!1ssk!2ssk!4v1685219697809!5m2!1ssk!2ssk"
            class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </section>


  <section class="pt-5">
    <div class="text-center text-white">
      <h1>Napíšte nám</h1>
      <p>Ak máte akékoľvek otázky ohľadom štúdia na našej škole, napíšte nám správu prostredníctvom tohto formulára. Na
        vaše otázky radi odpovieme.</p>
    </div>

    <form style="width: 50%; transform: translateX(50%);" class="text-center text-white mb-2" method="POST" action="">
      <div class="form-group">
        <label for="Meno">Meno a priezvisko</label>
        <input type="text" class="form-control" placeholder="Meno" name="meno">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">E-Mail</label>
        <input type="email" class="form-control" placeholder="email@example.com" name="email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Správa pre nás</label>
        <textarea class="form-control" placeholder="Vaša Správa" rows="3" name="sprava"></textarea>
      </div>
      <div class="form-group">
        <input type="checkbox" name="sendCopy" value="1"> Chcete kópiu ?
      </div>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Odoslať
      </button>
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Ste si istý ?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Správu ešte môžete zmeniť
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vrátiť späť</button>
            <form class="text-center text-white" method="POST" action="">
              <input type="submit" class="btn btn-danger" value="Odoslať" name="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p class="border-top text-center text-white fs-5 align-items-center justify-content-center"
      style="background-color: rgb(17, 8, 36); padding: 0; margin: 0">
      Dávid Laufik 2023 ODP
    </p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

  <script>
    const alertPlaceholder = document.getElementById("liveAlertPlaceholder");
    const appendAlert = (message, type) => {
      const wrapper = document.createElement("div");
      wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        "</div>",
      ].join("");

      alertPlaceholder.append(wrapper);
    };

    const alertTrigger = document.getElementById("liveAlertBtn");
    if (alertTrigger) {
      alertTrigger.addEventListener("click", () => {
        appendAlert("Klikol si na search", "success");
      });
    }
  </script>

  <script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
  </script>

  <script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    })
  </script>
</body>

</html>