<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/cadastro.css" />
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
  </head>
  <body>
    <header>
    <a href="<?= BASEPATH ?>home" >
        <div>
            <img id="logoConta" src="<?= BASEPATH ?>public/images/logo.svg" alt="logo" >
        </div>
</a>
    </header>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <div class="conteudo">
      <div class="linha">
        <div class="centro">
        <h2>Cadastro</h2>
        <form method = "POST" >
        <?php require 'app/view/alert.php' ?>
          <div class="linha">
            <div class="label">
              <label for="nome"><h3>Nome</h3></label>
            </div>
            <div class="input"><input type="text" id="nome" name="nome" type="text" placeholder="Seu nome"  required /></div>
          </div>
          <div class="linha">
            <div class="label">
              <label id = "label_data" for="data"><h3>Data de Nascimento</h3></label>
            </div>
            <div class="seletor dia">
              <select id="dia" name="dia" required>
                <option value="selDia" selected disabled>Dia</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="seletor mes">
              <select id="mes" name="mes" required>
                <option value="selMes" selected disabled>Mês</option>
                <option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Março</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Junho</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
              </select>
            </div>
            <div class="seletor ano">
              <select id="ano" name="ano" required>
                <option value="selAno" selected disabled >Ano</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
              </select>
            </div>
          </div>

          <div class="linha">
            <div class="label">
              <label for="endereco"><h3>Endereco</h3></label>
            </div>
            <div class="input">
              <input type="text" id="endereco" name ='endereco'  placeholder="Seu endereço"  required/>
            </div>
          </div>

          <div class="linha">
            <div class="label">
              <label for="cep"><h3>CEP</h3></label>
            </div>
            <div class="input" >
              <input type="text" id="cep" placeholder="XXXXX-XXX" name = 'cep' required />
            </div>
            <div class="label">
              <label id = "label_phone" for="telefone"><h3>Telefone</h3></label>
            </div>
            <div class="input">
              <input id = "input_phone"type="text" id="telefone" name = 'telefone'placeholder="(XX) XXXXX-XXXX" required/>
            </div>
        </div>

            <div class="linha">
              <div class="label">
                <label for="email"><h3>Email</h3></label>
              </div>
              <div class="input">
                <input type="text" id="email" name ='email' placeholder="meu@email.com" required />
              </div>
            </div>
            <div class="linha">
                <div class="label">
                  <label for="senha"><h3>Senha</h3></label>
                </div>
                <div class="input">
                  <input type="password" id="senha" name ="senha" placeholder="******************" pattern=".{4,}" required />
                </div>
              </div>
            <div class="linha">
                <input type = "checkbox" id = "subscribeNews" name = "subscribe" value = "newsletter">
                <label for = "subscribeNews"> Receber novidades, promoções, blabs  </label>
                </div>
          
          <div class="linha">
            <button id="confirmar"  type="submit" >Confirmar </button>

          </div>       
        
        </form>
        
        </div>
        
            <img id="nanatsu" src="<?= BASEPATH ?>public/images/meliodas.svg" alt="Meliodas" />
    
    </div>
    
       
    </div>
    
  </div>
  </body>
</html>
