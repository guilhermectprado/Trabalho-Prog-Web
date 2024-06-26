<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logar</title>
    <link
      rel="shortcut icon"
      type="imagex/png"
      href="<?= BASEPATH ?>public/images/cabecaum.ico"
    />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/conta.css" />
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
  </head>
  <body>
    <header>
      <a href="<?= BASEPATH ?>home">
        <div>
          <img
            id="logoConta"
            src="<?= BASEPATH ?>public/images/logo.svg"
            alt="logo"
          />
        </div>
      </a>
    </header>

    <div class="conteudo">
      <div class="linha">
        <img
          id="imagem"
          src="<?= BASEPATH ?>public/images/levi.svg"
          alt="Levi"
        />

        <div class="centro">
          <h2>Login</h2>

          <form method="POST" action="<?= BASEPATH ?>login" name="logar">
            <?php require 'app/view/alert.php' ?>
            <div class="linha">
              <div class="label">
                <label for="email"><h3>E-mail</h3></label>
              </div>
              <div class="input">
                <input type="email" id="email" placeholder="---@e-mail.com" name = 'email'/>
              </div>
            </div>

            <div class="linha">
              <div class="label">
                <label for="senha"><h3>Senha</h3></label>
              </div>
              <div class="input" id="senhaicon">
                <input type="password" id="senha" placeholder="********" name = 'senha'/>
                <img
                  src="<?= BASEPATH ?>public/images/olhofechado.svg"
                  id="olho"
                  onclick = "mostrarEsconder()"
                  alt="Mostrar Senha"
                />
              </div>
            </div>

            <div class="msg" id="msg"></div>
            <style>
              a {
                text-decoration: none;
                color: white;
              }
            </style>
            <div class="linha">
              
              <button type="submit">Entrar</button>
              
              <button type="button">
                <a href="<?= BASEPATH ?>register">Criar conta </a>
              </button>
             
            </div>

            <div class="linha" id="esqsenha" onclick = "esqueceusenha()">
              <h3>Esqueceu a senha?</h3>
            </div>
          </form>
        </div>

        <img
          id="imagem2"
          src="<?= BASEPATH ?>public/images/mikasa.svg"
          alt="Mikasa"
        />
      </div>
    </div>
  </body>
</html>
