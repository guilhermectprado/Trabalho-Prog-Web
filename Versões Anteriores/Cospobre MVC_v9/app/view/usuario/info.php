<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('app/visao/head.php') ?>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Suas Informações</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/style.css" />
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
                  ></ion-icon> <!-- implementar a tela carrinho e php -->
                  <span id="icone">Carrinho</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <form class="bg-white shadow-md rounded px-8 py-10 mb-4" method="POST" action="<?= BASEPATH ?>logout">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nome
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" value="<?= $data->nome ?>" disabled>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" value="<?= $data->email ?>" disabled>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Senha
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" value="<?= $data->senha ?>" disabled>
        </div>
        <div class="flex items-center justify-center">
            <button class="button" type="submit">
                Sair
            </button>
        </div>
    </form>
<?php if ($data->email == "admin@admin.com") {?>

  <form class= "lista_form" method="GET" action="<?= BASEPATH ?>list">
        <button class="button" type="submit">
                    Listar usuários cadastrados 
        </button>
    </form>
    
        <form class= "lista_form_produtos" method="GET" action="<?= BASEPATH ?>listProdutos">
        <button class="button" type="submit">
                    Listar produtos cadastrados 
                </button>
                </form>

                <?php } ?>
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
    
    <script src="script.js"></script>
    <script src="menu.js"></script>
</body>

</html>