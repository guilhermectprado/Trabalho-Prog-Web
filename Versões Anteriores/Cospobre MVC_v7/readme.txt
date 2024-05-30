Trabalho de Programação para Web- Engenharia de Software 2021/2 - Professor Hudson Borges:

A aplicação desenvolvida é um sistema web de vendas de produtos para cosplay, com o nome de Cospobre.
A aplicação segue o padrão Arquitetural MVC (Model-View-Controller).
**********************************************
Grupo: 
Giovanna Colin Valli - 2020.1906.004-0,
Guilherme Campos Torres Prado - 2020.1906.047-4,
Júlia Alves Corazza - 2020.1906.021-0,
Letícia Yurie Kokubu - 2020.1906.034-2,
Nathalia Melo dos Santos - 2020.1906.006-7 e
Vinícius Shinohara - 2019.1904.050-1.

Sobre o desenvolvimento:
Não houve uma sólida divisão de papéis, todos executaram um pouco de cada,
desde Front-End até Back-end. Todos construíram um pedacinho 
de cada parte da aplicação (HTML,CSS,JS, PHP, SQL);
**********************************************
---------------------------
Tecnologias utilizadas:
--- SGBD: SQLite.
--- Linguagem de Programação: PHP e JavaScript.
--- Linguagem de Marcação: HTML.
--- Uso de folhas de estilo (CSS).
--- Lib externa: Router.php (para implementação das rotas do controller) -> pasta libs
--- Gerador de Server: WampServer e Xampp
--- Ambiente de edição de códigos: VSCode.
--- Ambiente de comunicação entre o grupo: Google Meet, Whatsapp, Discord e LiveShare (VSCode --  pair programming).
--- Controle e registros de versões: Google Drive.

----------------------------

---> Sobre os Controllers:
Estão na pasta app/controller.
As rotas estão definidas no index.php e gerenciada por três controladores.
Os controladores são:
userController -> cuida do login/cadastro/listagem**(seria funcionalidade para o admin-- não totalmente implementada) de objetos usuários;
produtoController -> cuida do cadastro**(seria funcionalidade para o admin-- não totalmente implementada| 
feita inserção no banco para essa fase da aplicação)/listagem 'específica' de objetos produtos que estão no banco (especifica se leia
por categoria, pois não é necessário por enquanto uma tela de listagem total de produtos. Ainda assim, existe uma função para essse trata-
mento para gerar os recomendados (pode recomendar qualquer elemento produto salvo no banco);
carrinhoController -> responsável por tratar dos produtos escolhidos pelo usuário que está logado. Para não romper com a Arquitetura MVC,
esse controller foi criado. Sem ele, tanto o controller de usuario quanto o controller de produto acessariam responsabilidades um do outro.
Como o carrinho é uma classe que exige acesso de instancia de usuario e de produto (é uma associação desses dois), o carrinhoController não 
rompe com a Arquitetura, dado que trata somente dessa associação. Redireciona o total a ser pago para as telas de pagamento também.

---> Sobre as Views:
Estão na pasta app/view.
Telas implementadas:

- Tela inicial da aplicação: paginaprincipal.php
Navegação:


Conta -> conta.php (gerenciado pelo user controller)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
Botão de Acessórios -> acessorios.php (gerenciado pelo produtoController)
Botão de Perucas ->perucas.php (gerenciado pelo produtoController)
Demais botões -> ainda não implementadas. (conjuntos,lentes, roupas e sapatos)

- Tela de login: conta.php
Navegação:

Botão de Cadastro -> cadastro.php (gerenciado pelo user controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Entrar -> alerta de login com sucesso e vai para a tela inicial -> paginaprincipal.php (gerenciado pelo user controller)
Esqueceu Senha -> trocarsenha.php (não implementada)


- Tela de Cadastro: cadastro.php
Navegação:
Logo da aplicação-> paginaprincipal.php (gerenciado pelo user controller)
Confirmar -> alerta de cadastro com sucesso e vai para a tela de login -> conta.php (gerenciado pelo user controller)

- Tela de Acessórios: acessorios.php  (gerenciado pelo produto controller)
Navegação:
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário

- Tela de Peruca: peruca.php
Navegação:
Logo da aplicação-> paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário

-Telas de Cartão de Crédito e Débito
Sucesso da compra no credito -> paginaprincipal.php (gerenciado pelo carrinhoController)
Sucesso da compra no debito -> paginaprincipal.php (gerenciado pelo carrinhoController)
Trigger da navegação: botão confirmar;

-Tela de Carrinho

Navegação:
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário
Finalizar Compra -> modal -> 
Credito -> cartaoCredito.php (gerenciado pelo carrinhoController)
Debito -> cartaoDebito.php (gerenciado pelo carrinhoController)


---> Sobre o Model:
Estão na pasta app/model.
Produto.php, Usuario.php e Carrinho.php são as classes que representam o modelo da aplicação.

---> Banco:
Na pasta app, há o código em PHP para conexão e criação do schema do banco -> Database.php.
O banco é o cospobre-db.sqlite (está na raiz do projeto)

---> Sobre a pasta public:
Estão as imagens da aplicação (pasta images), scripts de JavaScript (pasta script) e folhas de estilos de CSS (pasta style).

---> Index.php: Ficam as rotas, iniciação de variáveis globais (como a BASEPATH ) e includes necessários para rodar a aplicação.

---> .htaccess: Está a BASEPATH arrumada (necessario para rodar a aplicação com o WAMP e o XAMPP).