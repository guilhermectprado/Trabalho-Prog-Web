<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Busca</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/header.css" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/listagem.css" />
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
    <script src="<?= BASEPATH ?>public/script/menu.js"></script>
  </head>

<body >
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
                    
                  ></ion-icon>
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


    <table>
        <thead>
            <tr>
                <th id="left">Nome</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Tamanho</th>
                <th id="centralizar">Imagem</th>
            </tr>
        </thead>


        <tbody>
            <?php if (is_null($data) || count($data) === 0) { ?>
                <tr>
                  <td>Não encontrei resultados :(</td>
                </tr>
                   
                
            <?php } else { ?>
                <?php foreach ($data as $prod) { ?>
                    <tr>
                        <td id="left"><?= $prod->nome ?></td>
                        <td><?= $prod->preco ?></td>
                        <td><?= $prod->categoria ?></td>
                        <td><?= $prod->tamanho ?></td>
                        <td>
                        <form action ="<?= BASEPATH ?>description" method = 'GET' class = "form_desc">
                          <input type= "hidden" name = "prod" value = "<?= $prod->nome?>" >   
                          <button type = "submit" >
                              <img id="cartas" src="<?= $prod->img ?>"  alt="<?= $prod->nome ?>">
                          </button>
                        </form>
                          </td>
                       
                    </tr>
                <?php } ?>
            <?php } ?>

        </tbody>
    </table>
    <style>
      a {
        text-decoration: none;
        color: black;
      }
    </style>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    
  
    <script src="menu.js"></script>
</body>

</html>