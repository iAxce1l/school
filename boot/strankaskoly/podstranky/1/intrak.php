<?php
if (isset($_POST['submit'])) {
    $to = "laufik@davidlaufik.studenthosting.sk";
    $from = $_POST['email'];
    $name = $_POST['meno'];
    $subject = "Odosielatel" . "\r\n" . $name . "\r\n" . "(" . $from . ")";
    $message = $_POST['sprava'];

    $header_array = [
        "Content-type: text/html; charset=UTF-8",
        "From: " . $from
    ];

    if (isset($_POST['sendCopy']) && $_POST['sendCopy'] == 1) {
        $to .= "," . $from; 
    }

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
                <a class="dropdown-item" href="./kontakt.php">Škola</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Internát</a>
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
      <li class="breadcrumb-item active text-white" aria-current="page">Internát</li>
    </ol>
  </nav>

  <div class="position-absolute top-10 start-50 translate-middle-x pt-3 position-absolute z-3"
    id="liveAlertPlaceholder"></div>


  <section class="pt-2">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
              <path
                d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z" />
            </svg>
            <h5 class="p-0 m-0">Meno školského zariadenia</h5>
          </div>
          <p>
            Školský internát, Karpatská 9, Poprad
          </p>
          <div class="accordion text-white" id="accordionExample">
            <div class="accordion-item text-white">
              <h2 class="accordion-header text-white">
                <button class="accordion-button text-white" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Tel.č
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show text-white"
                data-bs-parent="#accordionExample">
                <div class="accordion-body text-white">
                  <strong>Tel.:</strong> 052 77 63 414 – vrátnica <br>
                  <strong>Tel.:</strong> 052 77 23 176 - vedúca jedálne
                </div>
              </div>
            </div>
            <div class="accordion-item" text-white>
              <h2 class="accordion-header text-white">
                <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Email
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse text-white" data-bs-parent="#accordionExample">
                <div class="accordion-body text-white">
                  <strong>Riaditeľ</strong> riaditel@sipop.sk <br>
                  <strong>zástupca</strong> zastupca@sipop.sk <br>
                  <strong>Internát</strong> internat@sipop.sk <br>
                  <strong>Účtovník</strong> uctovnik@sipop.sk <br>
                  <strong>Kuchyňa</strong> kuchyna@sipop.sk
                </div>
              </div>
            </div>
            <div class="accordion-item text-white">
              <h2 class="accordion-header text-white">
                <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Info
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse text-white" data-bs-parent="#accordionExample">
                <div class="accordion-body text-white">
                  <strong>Web</strong> riaditel@sipop.sk <br>
                  <strong>Adresa</strong> Karpatská 9, 058 01 Poprad <br>
                  <strong>IČO</strong> 36166952 <br>
                  <strong>GPS</strong> N 49.057772° <br> E 20.291646° <br> <br>
                  <strong>Google street view</strong> https://shorturl.at/mMTV0 <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row p-3">
        <div id="mapa" class="col">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2614.516234070091!2d20.28927687681369!3d49.057821186650855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e3abf9c70e543%3A0xfdc66022452751cb!2zxaBrb2xza8O9IGludGVybsOhdA!5e0!3m2!1ssk!2ssk!4v1685563519403!5m2!1ssk!2ssk"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
          frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="text-center text-white">
      <h1>Napíšte nám</h1>
      <p>Ak máte akékoľvek otázky ohľadom ubytovania a stravovania, napíšte nám správu prostredníctvom tohto formulára.
        Na vaše otázky radi odpovieme.</p>
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
      style="background-color: rgb(17, 8, 36); padding: 0; margin: 0;">Dávid Laufik 2023 ODP</p>
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
</body>

</html>