<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cospobre</title>
    <link rel="shortcut icon" href="<?= BASEPATH ?>images/cabecaum.ico">
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/style.css">
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
    <script src="<?= BASEPATH ?>public/script/menu.js"></script>
  </head>

  <body>
    <header>
      <div class="container">
      <a href="<?= BASEPATH ?>home" >
        <img class="logo" src="<?= BASEPATH ?>public/images/logo.svg" alt="logo" />
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
              
              
                <form action = "<?= BASEPATH ?>busca" method = "GET" class = "form_busca">
                <input type="text" name = "buscar"   placeholder="Buscar produtos, nome, categoria, ..."/>
              </form>
              </li>

              <li>
                <a href="<?= BASEPATH ?>login" class="right-content">
                  <ion-icon
                  name="person-outline"
                  class="conta"
                  href="<?= BASEPATH ?>login" >
                </ion-icon>
                  <span id="icone" href="<?= BASEPATH ?>login" >Conta</span>
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
                <a href="<?= BASEPATH ?>chart" class="right-content">
                  <ion-icon
                    name="cart-outline"
                    class="carrinho"
                  ></ion-icon>
                  <span id="icone" >Carrinho</span>
                </a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </header>
    <?php require 'app/view/alert.php' ?>
    <img src="<?= BASEPATH ?>public/images/landing-page.svg" alt="otakus" width="100%" />
    <main>
      <section class="sections">
        <a href="<?= BASEPATH ?>acessories" style = "text-decoration: none;" >
          <div class="section">
            <button class="button" >Acessórios</button>
          </div>
        </a>
          <div class="section">
            <button class="button" onclick = "sapatos()" >Sapatos</button>
          </div>
          <div class="section">
            <button class="button" onclick = "conjuntos()">Conjuntos</button>
          </div>
          <div class="section">
            <button class="button" onclick = "roupas()">Roupas</button>
          </div>
          <a href="<?= BASEPATH ?>wigs" style = "text-decoration: none;">
          <div class="section">
          
            <button class="button" >Perucas</button>
          
          </div>
          </a>
          <div class="section"><button class="button" onclick = "lentes()" >Lentes</button>
          </div>
      </section>
    </main>
<script> 
$(document).ready(function(){
    $(".valor").on("input", function(){
        var textoDigitado = $(this).val();
        var inputCusto = $(this).attr("custo");
        $("#"+ inputCusto).val(textoDigitado);
    });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
