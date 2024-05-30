<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peruca</title>
    <link rel="shortcut icon" type="imagex/png" href="public/images/cabecaum.ico" />
    <link rel="stylesheet" href="public/style/style.css" />
    <script src="public/script/script.js"></script>
    <script src="public/script/menu.js"></script>
    <!-- <script> $("#header").load("header.html");</script> -->
  </head>

  <body>
    <header>
      <div class="container">
        <img class="logo" src="public/images/logo.svg" alt="logo" onclick="home()" />
        <div class="menu-section">
          <div class="menu-toggle">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>
          <nav>
            <ul>
              <li class="search">
                <input
                  type="text"
                  placeholder="Buscar produtos, nome, categoria, ..."
                />
              </li>
              <li>
                <a href="#" class="right-content">
                  <ion-icon
                    name="person-outline"
                    class="conta"
                    onclick="conta()"
                  ></ion-icon>
                  <span id="icone" onclick="conta()">Conta</span>
                </a>
              </li>
              <li>
                <a href="#" class="right-content">
                  <ion-icon
                    name="cart-outline"
                    class="carrinho"
                    onclick="carrinho()"
                  ></ion-icon>
                  <span id="icone" onclick="carrinho()">Carrinho</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <p class="acessorios">Perucas</p>
    <div class="cards">
      <div class="card">
        <img id="cartas" src="public/images/PerucaYamamotaKenshin.svg" alt="Yamota" />
        <div class="card-content">
          <h4>Peruca Yamamota Kenshin</h4>
        </div>
        <div class="card-price">
          <p class="price">R$125,00</p>
        </div>
      </div>
      <div class="card">
        <img
          id="cartas"
          src="public/images/PerucaAgatsumaZenitsu.svg"
          alt="Agatsuma"
        />
        <div class="card-content">
          <h4>Peruca Agatsuma Zenitsu</h4>
        </div>
        <div class="card-price">
          <p class="price">R$155,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaYomotsukiRuna.svg" alt="Yomotsuki" />
        <div class="card-content">
          <h4>Peruca Yomotsuki Runa</h4>
        </div>
        <div class="card-price">
          <p class="price">R$132,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaMauiuaTatsusuko.svg" alt="mauiua" />
        <div class="card-content">
          <h4>Peruca Mauiua Tatsusuko</h4>
        </div>
        <div class="card-price">
          <p class="price">R$115,00</p>
        </div>
      </div>

      <div class="card">
        <img id="cartas" src="public/images/PerucaKacariNyoa.svg" alt="Kacari" />
        <div class="card-content">
          <h4>Peruca Kacari Nyoa</h4>
        </div>
        <div class="card-price">
          <p class="price">R$90,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaAsunaHomura.svg" alt="asuna" />
        <div class="card-content">
          <h4>Peruca Asuna Homura</h4>
        </div>
        <div class="card-price">
          <p class="price">R$90,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaArashiHenra.svg" alt="Arashi" />
        <div class="card-content">
          <h4>Peruca Arashi Henra</h4>
        </div>
        <div class="card-price">
          <p class="price">R$98,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaHayaKonbuka.svg" alt="Haya" />
        <div class="card-content">
          <h4>Peruca Haya Konbuka</h4>
        </div>
        <div class="card-price">
          <p class="price">R$120,00</p>
        </div>
      </div>

      <div class="card">
        <img id="cartas" src="public/images/PerucaMegumi.svg" alt="Megumi" />
        <div class="card-content">
          <h4>Peruca Megumi</h4>
        </div>
        <div class="card-price">
          <p class="price">R$60,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaItadoriYuji.svg" alt="Itadori" />
        <div class="card-content">
          <h4>Peruca Itadori Yuji</h4>
        </div>
        <div class="card-price">
          <p class="price">R60,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaYuNishin.svg" alt="Yu" />
        <div class="card-content">
          <h4>Peruca Yu Nishin</h4>
        </div>
        <div class="card-price">
          <p class="price">R$45,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaTanjiroKamada.svg" alt="Tanjiro" />
        <div class="card-content">
          <h4>Peruca Tanjiro Kamada</h4>
        </div>
        <div class="card-price">
          <p class="price">R$84,00</p>
        </div>
      </div>

      <div class="card">
        <img id="cartas" src="public/images/PerucaEmilia.svg" alt="Emilia" />
        <div class="card-content">
          <h4>Peruca Emilia</h4>
        </div>
        <div class="card-price">
          <p class="price">R$50,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaGrey.svg" alt="Grey" />
        <div class="card-content">
          <h4>Peruca Grey</h4>
        </div>
        <div class="card-price">
          <p class="price">R75,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaEmo.svg" alt="Emo" />
        <div class="card-content">
          <h4>Peruca Emo</h4>
        </div>
        <div class="card-price">
          <p class="price">R$45,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaLazyTown.svg" alt="Lazy" />
        <div class="card-content">
          <h4>Peruca Lazy Town</h4>
        </div>
        <div class="card-price">
          <p class="price">R$40,00</p>
        </div>
      </div>

      <div class="card">
        <img id="cartas" src="public/images/PerucaChanelPreta.svg" alt="chanel" />
        <div class="card-content">
          <h4>Peruca Chanel Preta</h4>
        </div>
        <div class="card-price">
          <p class="price">R$40,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaShoyoHinata.svg" alt="Shoyo" />
        <div class="card-content">
          <h4>Peruca Shoyo Hinata</h4>
        </div>
        <div class="card-price">
          <p class="price">R30,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaChanelVerde.svg" alt="chanel" />
        <div class="card-content">
          <h4>Peruca Chanel Verde</h4>
        </div>
        <div class="card-price">
          <p class="price">R$35,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="public/images/PerucaSaber.svg" alt="Saber" />
        <div class="card-content">
          <h4>Peruca Saber</h4>
        </div>
        <div class="card-price">
          <p class="price">R$60,00</p>
        </div>
      </div>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="script.js"></script>
    <script src="menu.js"></script>
  </body>
</html>
