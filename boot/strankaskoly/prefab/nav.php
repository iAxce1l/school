<nav
      class="navbar navbar-expand-lg bg-body border-bottom border-white"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="../../index.html">
          <img src="../../img/logo-removebg-preview.png" width="52px" alt="" />
          SSOSTA</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Novinky</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                O škole
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item"
                    href="../oskole/profil.html"
                    >Profil školy</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../oskole/hodnoty.html"
                    >Naše hodnoty</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Pre uchádzačov
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item"
                    href="../preuchadzacov/programy.html"
                    >Študijné programy</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../preuchadzacov/prijimacky.html"
                    >Prijímacie konanie</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Život na škole
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item"
                    href="../naskole/fotoalbum.html"
                    >Fotoalbum</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../naskole/erasmus.html"
                    >Erasmus+</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Kontakty
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item"
                    href="./kontakt.html"
                    >Škola</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="./intrak.html"
                    >Internát</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <div class="d-flex">
            <a class="nav-link" clas="invert" aria-current="page" href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                fill="grey"
                class="bi bi-person"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"
                />
              </svg>
            </a>

            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button type="button" class="btn btn-primary" id="liveAlertBtn">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>

    <div
      class="position-absolute top-10 start-50 translate-middle-x pt-3 position-absolute z-3"
      id="liveAlertPlaceholder"
    ></div>



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