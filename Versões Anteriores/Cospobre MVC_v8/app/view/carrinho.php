<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="shortcut icon" type="imagex/png" href="<?= BASEPATH ?>public/images/cabecaum.ico" />
    <script src="<?= BASEPATH ?>public/script/script.js"></script>
    <script src="<?= BASEPATH ?>public/script/menu.js"></script>
    <link rel="stylesheet" href="<?= BASEPATH ?>public/style/carrinho.css" />
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
                    <input type="text" placeholder="Buscar produtos, nome, categoria, ..."/>
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
                            <ion-icon name="cart-outline" class="carrinho"></ion-icon>
                            <span id="icone">Carrinho</span>
                        </a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>    
    </header>

    <div class="conteudo">
        <div class="linha">
            <div class="coluna1">
		        <h2 id="negrito"><ion-icon name="cart-outline"></ion-icon>CARRINHO DE COMPRAS</h2>
                <?php
                if (!isset($produtos) ){
                    $produtos = [];
                
                }
                

                if (is_null($data)|| count($data)===0) {   
                    ?>
                    <td colspan="4" class="border text-center h-24">Nada ainda :(</td>
                <?php        
                     }
                 else{
                
                foreach ($data as $p){
                    array_push($produtos,$p->preco);
            
            ?>

                <div class="linha padding">
                    <img id="produtos" src="<?= $p->img?>" alt="<?= $p->nome?>" />
                    <div class="conteudo">
                        <div class="linha">
                            <h2 class="padding"><?= $p->nome?></h2>
                            <h3 class="padding"><?= $p->preco?></h3>
                        </div>
                        <span class="padding"><?= $p->material?></span>                       
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
            </div> <!--DIV COLUNA 1 -->
            <?php
                    $total = 0 ;
                    $subtotal = 0 ;
                foreach($produtos as $p){
                    if (strlen($p)===8) {
                        $subtotal = $subtotal +  (int)substr($p, 2, 3);
                    } else if (strlen($p->preco)===7) {
                        $subtotal = $subtotal +  (int)substr($p, 2, 2);
                    }
                }
                
                 
                $total = $subtotal + 10;
                ?>
            <div class="coluna2">
                <div class="linha">
                    <div class="coluna1">
                        <h2>Subtotal</h2>
                    </div>

                    <h3>R$<?= $subtotal?>,00</h3>
                    
                </div>
                
                </br>

                <div class="linha">
                    <div class="coluna1">
                        <h2>Frete</h2>
                    </div>

                    <h3>R$ 10,00</h3>
                </div>

                </br><hr>
                
                <div class="linha">
                    <div class="coluna1">
                        <h2>Total</h2>
                    </div>

                   <h3>R$<?= $total?>,00</h3>
                </div>

                

               
                
                <div><!-- AAAAAAAAAAAAAA -->
                    <button class="botao"><a href="#modal">FINALIZAR COMPRA</a></button>

                    <div id="modal" class="modal">
                        <div class="modal-aparicao">
                            <div class="modal-conteudo">
                                <header id="titulo" class="padding-modal">
                                    <h2>Escolha a forma de pagamento</h2>
                                    <a href="#" class="fechar">×</a>
                                </header>
                            
                                <div class="linha">
                                    <div class="padding-modal">
                                        <form action ="<?= BASEPATH ?>pay" method = 'GET' class = "form_desc">
                                            <button type = "submit"  name = "cartao" value = "credito" class="teste botao" >Crédito</button>
                                            
                                        </form>
                                    </div>

                                    <div class="padding-modal">
                                        <form action ="<?= BASEPATH ?>pay" method = 'GET' class = "form_desc">
                                            <button type = "submit" value = "debito"
                                            name = "cartao" class="teste botao">Débito  </button>
                                        </form>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- AAAAAAAAAAAAAA -->
                
                
            </div> <!--DIV COLUNA 2 -->
        </div> <!--DIV LINHA -->
    </div> <!--DIV CONTEUDO -->


   <!-- php include 'app/view/recomendado.php'  --> 

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
    <script src="menu.js"></script>
</body>

</html>