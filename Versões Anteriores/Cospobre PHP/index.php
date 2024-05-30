<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cospobre</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="images/cabecaum.ico" />
  </head>

  <body>
    <header>
      <div class="container">
        <img class="logo" src="images/logo.svg" alt="logo" />
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

    <img src="images/landing-page.svg" alt="otakus" width="100%" />
    <main>
      <section class="sections">
        <div class="section">
          <button class="button" onclick="acessorios()">Acessórios</button>
        </div>
        <div class="section">
          <button class="button" onclick="sapatos()">Sapatos</button>
        </div>
        <div class="section">
          <button class="button" onclick="conjuntos()">Conjuntos</button>
        </div>
        <div class="section">
          <button class="button" onclick="roupas()">Roupas</button>
        </div>
        <div class="section">
          <button class="button" onclick="perucas()">Perucas</button>
        </div>
        <div class="section">
          <button class="button" onclick="lentes()">Lentes</button>
        </div>
      </section>
    </main>

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
