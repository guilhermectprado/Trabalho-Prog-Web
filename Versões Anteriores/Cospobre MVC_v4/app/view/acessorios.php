<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acessórios</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/style.css" />
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
    <script src="<?= BASEPATH ?>public/script/menu.js"></script>
    
  </head>

  <body>
    <header>
      <div class="container">
      <a href="<?= BASEPATH ?>home" >
        <img class="logo" src="<?= BASEPATH ?>public/images/logo.svg" alt="logo"  />
</a>
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
              <a href="<?= BASEPATH ?>login" class="right-content">
                  <ion-icon name="person-outline" class="conta"></ion-icon>
                  <span >Conta</span>
                </a>
              </li>
              <li>
                <a href="<?= BASEPATH ?>carrinho">
                  <ion-icon name="cart-outline" class="carrinho"></ion-icon>
                  <span >Carrinho</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <p class="acessorios">Acessórios</p>
    <div class="cards">
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/hitaiite.svg" alt="hitai" />
        <div class="card-content">
          <h4>Hitai-ite</h4>
        </div>
        <div class="card-price">
          <p class="price">R$55,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/shuriken.svg" alt="shurikem" />
        <div class="card-content">
          <h4>Shuriken</h4>
        </div>
        <div class="card-price">
          <p class="price">R$75,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/shingeki.svg" alt="shingeki" />
        <div class="card-content">
          <h4>Espada Shingeki No Kyojin</h4>
        </div>
        <div class="card-price">
          <p class="price">R$100,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/baculo.svg" alt="baculo" />
        <div class="card-content">
          <h4>Báculo Sakura Card Captor</h4>
        </div>
        <div class="card-price">
          <p class="price">R$150,00</p>
        </div>
      </div>

      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/cartas.svg" alt="cartas" />
        <div class="card-content">
          <h4>Cartas Clear Sakura Card Captor</h4>
        </div>
        <div class="card-price">
          <p class="price">R$45,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/zelda.svg" alt="zelda" />
        <div class="card-content">
          <h4>Armas Zelda</h4>
        </div>
        <div class="card-price">
          <p class="price">R$130,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/batman.svg" alt="batman" />
        <div class="card-content">
          <h4>Máscara Batman</h4>
        </div>
        <div class="card-price">
          <p class="price">R$45,00</p>
        </div>
      </div>
      <div class="card">
        <img id="cartas" src="<?= BASEPATH ?>public/images/spiderman.svg" alt="spiderman" />
        <div class="card-content">
          <h4>Máscara Homem-Aranha</h4>
        </div>
        <div class="card-price">
          <p class="price">R$55,00</p>
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
    <script src="<?= BASEPATH ?>script.js"></script>
    <script src="<?= BASEPATH ?>menu.js"></script>
  </body>
</html>