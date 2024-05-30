<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="shortcut icon" type="imagex/png" href="public/images/cabecaum.ico" />
    <link rel="stylesheet" href="public/style/cadastro.css" />
    <script src="public/script/script.js"></script>
  </head>
  <body>
    <header>
        <div>
            <img id="logoConta" src="public/images/logo.svg" alt="logo" onclick="home()">
        </div>
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
        <form action="">
          <div class="linha">
            <div class="label">
              <label for="nome"><h3>Nome</h3></label>
            </div>
            <div class="input"><input type="text" id="nome" /></div>
          </div>
          <div class="linha">
            <div class="label">
              <label id = "label_data" for="data"><h3>Data de Nascimento</h3></label>
            </div>
            <div class="seletor dia">
              <select id="dia" name="dia">
                <option value="selDia">Dia</option>
                <option value="dia1">01</option>
                <option value="dia2">02</option>
                <option value="dia3">03</option>
                <option value="dia4">04</option>
                <option value="dia5">05</option>
                <option value="dia6">06</option>
                <option value="dia7">07</option>
                <option value="dia8">08</option>
                <option value="dia9">09</option>
                <option value="dia10">10</option>
                <option value="dia11">11</option>
                <option value="dia12">12</option>
                <option value="dia13">13</option>
                <option value="dia14">14</option>
                <option value="dia15">15</option>
                <option value="dia16">16</option>
                <option value="dia17">17</option>
                <option value="dia18">18</option>
                <option value="dia19">19</option>
                <option value="dia20">20</option>
                <option value="dia21">21</option>
                <option value="dia22">22</option>
                <option value="dia23">23</option>
                <option value="dia24">24</option>
                <option value="dia25">25</option>
                <option value="dia26">26</option>
                <option value="dia27">27</option>
                <option value="dia28">28</option>
                <option value="dia29">29</option>
                <option value="dia30">30</option>
                <option value="dia31">31</option>
              </select>
            </div>
            <div class="seletor mes">
              <select id="mes" name="mes">
                <option value="selMes">Mês</option>
                <option value="mes1">Janeiro</option>
                <option value="mes2">Fevereiro</option>
                <option value="mes3">Março</option>
                <option value="mes4">Abril</option>
                <option value="mes5">Maio</option>
                <option value="mes6">Junho</option>
                <option value="mes7">Julho</option>
                <option value="mes8">Agosto</option>
                <option value="mes9">Setembro</option>
                <option value="mes10">Outubro</option>
                <option value="mes11">Novembro</option>
                <option value="mes12">Dezembro</option>
              </select>
            </div>
            <div class="seletor ano">
              <select id="ano" name="ano">
                <option value="selAno">Ano</option>
                <option value="ano1980">1980</option>
                <option value="ano1981">1981</option>
                <option value="ano1982">1982</option>
                <option value="ano1983">1983</option>
                <option value="ano1984">1984</option>
                <option value="ano1985">1985</option>
                <option value="ano1986">1986</option>
                <option value="ano1987">1987</option>
                <option value="ano1988">1988</option>
                <option value="ano1989">1989</option>
                <option value="ano1990">1990</option>
                <option value="ano1991">1991</option>
                <option value="ano1992">1992</option>
                <option value="ano1993">1993</option>
                <option value="ano1994">1994</option>
                <option value="ano1995">1995</option>
                <option value="ano1996">1996</option>
                <option value="ano1997">1997</option>
                <option value="ano1998">1998</option>
                <option value="ano1999">1999</option>
                <option value="ano2000">2000</option>
                <option value="ano2001">2001</option>
                <option value="ano2002">2002</option>
                <option value="ano2003">2003</option>
              </select>
            </div>
          </div>

          <div class="linha">
            <div class="label">
              <label for="endereco"><h3>Endereco</h3></label>
            </div>
            <div class="input">
              <input type="text" id="endereco" />
            </div>
          </div>

          <div class="linha">
            <div class="label">
              <label for="cep"><h3>CEP</h3></label>
            </div>
            <div class="input">
              <input type="text" id="cep" placeholder="XXXXX-XXX" />
            </div>
            <div class="label">
              <label id = "label_phone" for="telefone"><h3>Telefone</h3></label>
            </div>
            <div class="input">
              <input id = "input_phone"type="text" id="telefone" placeholder="(XX) XXXXX-XXXX" />
            </div>
        </div>

            <div class="linha">
              <div class="label">
                <label for="email"><h3>Email</h3></label>
              </div>
              <div class="input">
                <input type="text" id="email" />
              </div>
            </div>
            <div class="linha">
                <div class="label">
                  <label for="senha"><h3>Senha</h3></label>
                </div>
                <div class="input">
                  <input type="password" id="senha" />
                </div>
              </div>
            <div class="linha">
                <input type = "checkbox" id = "subscribeNews" name = "subscribe" value = "newsletter">
                <label for = "subscribeNews"> Receber novidades, promoções, blabs </label>
                </div>
          
                
        
        </form>
        <div class="linha">
            <button id="confirmar" onclick="confirmarCadastro()">Confirmar</button>

        </div>
        </div>
        
            <img id="nanatsu" src="public/images/meliodas.svg" alt="Meliodas" />
    
    </div>




    
       
    </div>
    
  </div>
  </body>
</html>
