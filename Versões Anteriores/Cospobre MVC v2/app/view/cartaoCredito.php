<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagamento</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/cartao.css" />
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
    <script src="<?= BASEPATH ?>public/script/menu.js"></script>
  </head>
  <body>
    <header>
    <a href="<?= BASEPATH ?>home" >
      <div>
      
        <img
          id="LogoCartao"
          src="<?= BASEPATH ?>public/images/logo.svg"
          alt="logo"
        />
      </div>
</a>
    </header>

    <div class="conteudo">
      <h2>Cartão de Crédito</h2>

      <div class="card-conteudo">
        <div class="front">
            <div class="image">
                <img src="<?= BASEPATH ?>public/images/chip.png" alt="">
            </div>
            <div class="card-number-box">xxxx.xxxx.xxxx.xxxx</div>
            <div class="flexbox">
                <div class="box">
                    <span>Nome Titular</span>
                    <div class="card-holder-name">Wilson Wagner B Pederneiras</div>
                </div>
                <div class="box">
                    <span>Vencimento</span>
                    <div class="expiration">
                        <span class="exp-month">mês</span>
                        <span class="exp-year">ano</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="<?= BASEPATH ?>image/visa.png" alt="">
            </div>
        </div>
      </div>

      <div class="linha">
        <form action="">
          <div class="linha">
            <div class="label">
              <label for="numCartao"><h3>Número do Cartão</h3></label>
            </div>
            <div class="input">
              <input type="text" id="numero" data-mask="0000 0000 0000 0000" placeholder="xxxx.xxxx.xxxx.xxxx" />
            </div>
          </div>

          <div class="linha">
            <div class="label">
              <label for="nomeTitular"><h3>Nome do Titular</h3></label>
            </div>
            <div class="input">
              <input type="text" id="nome" placeholder="Wilson Wagner B Pederneiras" />
            </div>
          </div>
          
          <div class="linha">
            <div class="label">
              <label for="data"><h3>Vencimento do cartão</h3></label>
            </div>
            <div class="seletor">
              <select id="mes">
                <option value="selecioneMes" selected disabled>Mês</option>
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
              </select>
            </div>
            <div class="seletor">
              <select id="ano" >
                <option value="selecioneAno" selected disabled>Ano</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
              </select>
            </div>
            <div id="labelcvv" class="label">
              <label for="cvv"><h3>CVV</h3></label>
            </div>
            <div id="inputCVV" class="input">
              <input type="text" id="cvv" data-mask="000" placeholder="xxx" />
            </div>
          </div>

          <div class="linha">
            <div class="label">
              <label for="parcela"><h3>Defina quantas prestações</h3></label>
            </div>
            <div class="seletor parcela">
              <select id="parcela" name="parcela">
                <option value="selecioneParcela">Parcela</option>
                <option value="uma">1x</option>
                <option value="duas">2x</option>
                <option value="tres">3x</option>
                <option value="quatro">4x</option>
                <option value="cinco">5x</option>
                <option value="seis">6x</option>
                <option value="sete">7x</option>
                <option value="oito">8x</option>
                <option value="nove">9x</option>
                <option value="nove">10x</option>
                <option value="nove">11x</option>
                <option value="nove">12x</option>
              </select>
            </div>
          </div>
          <div class="linha">
            <button id="confirmar" onclick="confirmarCompra()">Confirmar</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
      document.querySelector('#numero').oninput = () =>{
      document.querySelector('.card-number-box').innerText = document.querySelector('#numero').value;
      }

      document.querySelector('#nome').oninput = () =>{
          document.querySelector('.card-holder-name').innerText = document.querySelector('#nome').value;
      }

      document.querySelector('#mes').oninput = () =>{
          document.querySelector('.exp-month').innerText = document.querySelector('#mes').value;
      }

      document.querySelector('#ano').oninput = () =>{
          document.querySelector('.exp-year').innerText = document.querySelector('#ano').value;
      }

      document.querySelector('#cvv').onmouseenter = () =>{
          document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
          document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
      }

      document.querySelector('#cvv').onmouseleave = () =>{
          document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
          document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
      }

      document.querySelector('#cvv').oninput = () =>{
          document.querySelector('.cvv-box').innerText = document.querySelector('#cvv').value;
      }
    </script>
  </body>
</html>
