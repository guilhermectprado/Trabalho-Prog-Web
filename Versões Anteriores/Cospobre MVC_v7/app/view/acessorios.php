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
                <a href="<?= BASEPATH ?>logout" class="right-content"> 
                <ion-icon 
                name="log-out" 
                class="sair"
                href="<?= BASEPATH ?>logout">
                </ion-icon>
                <span id="icone" href="<?= BASEPATH ?>logout" >Sair</span>
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
      <?php if (is_null($data) || count($data) === 0) { ?>
                

      <?php } else { ?>
        <?php foreach ($data as $prod) { ?>

        
          <div class="card">
          <form action ="<?= BASEPATH ?>description" method = 'GET' class = "form_desc">
              <input type= "hidden" name = "peruca" value = "<?= $prod->nome?>" >   
              <button type = "submit" >
                  <img id="cartas" src="<?= $prod->img ?>"  alt="<?= $prod->nome ?>">
              </button>
            </form>
          

            <div class="card-content">
              <h4><?= $prod->nome ?></h4>
            </div>

            <div class="card-price">
              <p class="price"><?= $prod->preco ?></p>
            </div>
          </div>
          <?php } ?>
    <?php } ?>
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