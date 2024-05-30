<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Descrição</title>
  <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
  <link rel="stylesheet" href="<?= BASEPATH ?>public/style/header.css" />
  <link rel="stylesheet" href="<?= BASEPATH ?>public/style/descricao.css" />
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
                  <ion-icon name="person-outline" class="conta"></ion-icon>
                  <span id="icone" >Conta</span>
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
                <a href="<?= BASEPATH ?>chart"  class="right-content">
                  <ion-icon
                    name="cart-outline"
                    class="carrinho"
                  ></ion-icon> 
                  <span id="icone">Carrinho</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    
    </header>

  <div class="teste">
    <div class="teste-top">
      <div class="left">
      <?php if (is_null($data)) {           
          
                  } else{ ?>
        <img src="<?= $data[0]->img ?>" >
        <div class="vertical">
          <img src="<?= $data[0]->img ?>" >
          <img src="<?= $data[0]->img ?>" >
          <img src="<?= $data[0]->img ?>" >
        </div>
      </div>
      <div class="right">
        <p class="product-name"><?= $data[0]->nome ?></p>
        <?php } ?>

        <h1><?= $data[0]->preco ?></h1>
        <hr>
        <div class="side-by-side">
            <div class="aaa">
            </br>
            <form action ="<?= BASEPATH ?>chart/added" method = 'GET' class = "form_desc">

              <button type= "submit"class="adiciona">Adicionar ao carrinho</button>
              <input type= "hidden" name = "produto" value = "<?= $data[0]->nome?>" >   
              
              </form>
            </div>
            
              
          

          <div class="aaa">
            <h4>AVALIAR</h4>
            <img class="thumb" id="like" onclick="darLike()" src="<?= BASEPATH ?>public/images/likeVazio.svg">
            <img class="thumb" id="dislike" onclick="darDislike()" src="<?= BASEPATH ?>public/images/dislikeVazio.svg">
          </div>
        </div>
      </div>
    </div>

    <div class="teste-bottom">
      <div class="bottom">
        <h3>Descrição</h3>
          <p><strong>Material:</strong> <?= $data[0]->material ?></p>
          <p><strong>Cor:</strong> <?= $data[0]->cor ?></p>
          <p><strong>Comprimento:</strong> - <?= $data[0]->tt?></p></br>
          Esse produto é entregue na forma em que esta na imagem. Contudo, pode ser necessário fazer ajustes.
      </div>
    </div>    
  </div>

  <?php include 'app/view/produto/recomendado.php' ?>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>
  <script src="menu.js"></script>
</body>

</html>