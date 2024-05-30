<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('app/visao/head.php') ?>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Suas Informações</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/header.css"/>
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/info_user.css" />
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
                            <ion-icon  name="log-out"  class="sair" href="<?= BASEPATH ?>logout"></ion-icon>
                            <span id="icone" href="<?= BASEPATH ?>logout" >Sair</span>
                            </a> 
                        </li>

                        <li>
                            <a href="<?= BASEPATH ?>chart"  class="right-content">
                            <ion-icon name="cart-outline" class="carrinho"></ion-icon> <!-- implementar a tela carrinho e php -->
                            <span id="icone">Carrinho</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="centralizar">
        <form method="POST" action="<?= BASEPATH ?>logout">
            <div class="centralizar">
                <label for="name">Nome</label>
                <input id="name" value="<?= $data->nome ?>" disabled>
            </div>

            <div class="centralizar">
                <label for="email">Email</label>
                <input class="" id="email" value="<?= $data->email ?>" disabled>
            </div>

            
            <div class="centralizar">
                <label for="password">Senha</label>
                <div id="senhaicon">
                    <input type="password" id="senha" value="<?= $data->senha ?>" disabled>
                    <img src="<?= BASEPATH ?>public/images/olhofechado.svg" id="olho" onclick = "mostrarEsconder()" alt="Mostrar Senha"/>
                </div>
            </div>
            

            <div>
                <button class="button" id="sair" type="submit">Sair</button>
            </div>
        </form>
    </div>

    <div class="centralizar">
        <?php if ($data->email == "admin@admin.com") {?>

        <form method="GET" action="<?= BASEPATH ?>list">
            <button class="button" type="submit">Listar usuários cadastrados</button>
        </form>

        <form method="GET" action="<?= BASEPATH ?>listProdutos">
            <button class="button" type="submit">Listar produtos cadastrados </button>
        </form>

        <?php } ?>
    </div>

    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>