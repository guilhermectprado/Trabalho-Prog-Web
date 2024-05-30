<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listagem de Usuários</title>
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

    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Data</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if (is_null($data) || count($data) === 0) { ?>
                <tr>
                    <td colspan="4">Nenhum usuário cadastrado ainda :(</td>
                </tr>
            <?php } else { ?>
                <?php foreach ($data as $user) { ?>
                    <tr>
                        <td><?= $user->nome ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->senha ?></td>
                        <td><?= $user->dataNascimento ?></td>
                        
                    </tr>
                <?php } ?>
            <?php } ?>

        </tbody>
    </table>

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