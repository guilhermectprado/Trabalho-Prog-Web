<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logar</title>
    <link rel="shortcut icon" type="imagex/png" href="images/cabecaum.ico" />
    <link rel="stylesheet" href="conta.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <header>
      <div>
        <img id="logoConta" src="images/logo.svg" alt="logo" onclick="home()" />
      </div>
    </header>

    <div class="conteudo">
      <div class="linha">
        <img id="imagem" src="images/levi.svg" alt="Levi" />

        <div class="centro">
          <h2>Login</h2>
          
          <form method="post" action="" name ="logar">

            <div class="linha">
              <div class="label">
                <label for="email"><h3>E-mail</h3></label>
              </div>
              <div class="input">
                <input type="email" id="email" onblur="validacaoEmail(logar.email)" placeholder="---@e-mail.com"/>
              </div>
            </div>

            <div class="linha">
              <div class="label">
                <label for="senha"><h3>Senha</h3></label>
              </div>
              <div class="input" id="senhaicon">
                <input type="password" id="senha" onblur="validacaoSenha(logar.senha)" placeholder="********"/> 
                <img src="images/olhofechado.svg" id ="olho" alt="Mostrar Senha" onclick="mostrarEsconder()">    
              </div>
            </div>
            
            <div class="msg" id="msg"></div>

            <div class="linha">
              <button type="submit">Entrar</button>
              <!-- O ENTRAR só muda de página se for do type buttom, mas o alert funfa '-' -->
              <button type="button" onclick="cadastrar()">Criar conta</button>
              <!-- O CADASTRAR só abre quando o botao é determinado do tipo botão '---' -->
            </div>

            <div class="linha" id="esqsenha" onclick="esqueceusenha()">
              <h3>Esqueceu a senha?</h3>
            </div>
          </form>
        </div>

        <img id="imagem2" src="images/mikasa.svg" alt="Mikasa" />
      </div>
    </div>
  </body>
</html>
