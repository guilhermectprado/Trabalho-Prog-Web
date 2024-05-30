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
link: https://drive.google.com/drive/folders/1A7JET4284Yfl2ShbE6irz2fDn-2Ae_Ex?usp=sharing

----------------------------

---> Sobre os Controllers:
Estão na pasta app/controller.
As rotas estão definidas no index.php e gerenciada por três controladores.
Os controladores são:
userController -> cuida do login/cadastro/listagem**(seria funcionalidade para o admin) de objetos usuários;
produtoController -> cuida do cadastro**(seria funcionalidade para o admin-- não totalmente implementada| 
feita inserção no banco para essa fase da aplicação)/listagem por categoria de objetos produtos que estão no banco (popula a view produtos de produtos 
de acordo com a categoria que ele clicou na página principal)/listagem total**(seria funcionalidade para o admin)/ descrição de produto.
Existe uma função para gerar os recomendados (pode recomendar qualquer elemento produto salvo no banco);
carrinhoController -> responsável por tratar dos produtos escolhidos pelo usuário que está logado. Para não romper com a Arquitetura MVC,
esse controller foi criado. Sem ele, tanto o controller de usuario quanto o controller de produto acessariam responsabilidades um do outro.
Como o carrinho é uma classe que exige acesso de instancia de usuario e de produto (é uma associação desses dois), o carrinhoController não 
rompe com a Arquitetura, dado que trata somente dessa associação. Redireciona para as telas de pagamento também.
----------------------------
---> Sobre as Views:
Estão na pasta app/view.
Telas implementadas:

- Tela inicial da aplicação: paginaprincipal.php
Navegação:

Buscar -> buscados.php (gerenciado pelo produto controller)
Conta -> conta.php (gerenciado pelo user controller)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
Botão de Acessórios -> produtos.php (gerenciado pelo produtoController)
Botão de Perucas ->produtos.php (gerenciado pelo produtoController)
Botão de Conjuntos ->produtos.php (gerenciado pelo produtoController)
Botão de Sapatos ->produtos.php (gerenciado pelo produtoController)
Demais botões -> ainda não implementadas. (lentes e roupas)

******Telas referentes ao usuario -> Estão na pasta app/view/usuario.
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

- Tela de Informação do Usuário: info.php  
Lista informações do usuário e a opção de sair. Caso o usuário seja o admin, a tela apresenta os botões 
para as telas de listagem de usuário e de produtos cadastrados.

Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário



- Tela de Listagem de Usuários Cadastrados: listar.php  (Está na pasta app/view/usuario/admin.)
Lista todos os usuários cadastrados no banco para o admin

Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário

******Telas referentes ao produto -> Estão na pasta app/view/produto. 

- Tela de Listagem de Produtos por categoria: produtos.php  
A view é a mesma, mas é modificada e populada com os produtos de acordo com o botão clicado na página principal, onde vai alterando seu
nome e conteúdo. Pode ser de Sapato, conjunto,peruca ou acessório.
Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário
imagem do produto -> descricao.php (gerenciado pelo produto controller)7

- Tela de Descrição de Produto: descricao.php 
A view é a mesma, mas é modificada e populada com os produtos de acordo com o produto escolhido, onde vai alterando seu
nome e conteúdo. Pode ser de Sapato, conjunto,peruca ou acessório. Pode avaliar se gosotou do produto.
Ela inclui a view de recomendados (recomendado.php), que são três produtos aleatoriamente escolhidos do banco.
Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário

- Tela de Recomendados: recomendado.php
imagem do produto -> descricao.php (gerenciado pelo produto controller)


- Tela de Busca de produtos pelo Usuário: buscados.php 
A view é a mesma, mas é modificada e populada com os produtos de acordo com a pesquisa do usuário, onde vai alterando seu 
conteúdo de acordo com o que é retornado do banco. A busca pode ser feita pelo nome do produto. Além disso, há como fazer uma busca
um pouco mais avançada: por categoria {acessórios}, cor {rosa} ou características mais específicas do produto em relação ao seu 
tamanho/comprimento {cano curto | corte lateral | kimono [longo] }
Ela inclui a view de recomendados (recomendado.php), que são três produtos aleatoriamente escolhidos do banco.
Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário
imagem do produto -> descricao.php (gerenciado pelo produto controller)

- Tela de Listagem de Produtos Cadastrados: listarProdutos.php  
Lista todos os produtos cadastrados no banco para o admin

Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário


******Telas referentes ao carrinho -> Estão na pasta app/view/carrinho.

-Telas de Cartão de Crédito e Débito
Sucesso da compra no credito -> paginaprincipal.php (gerenciado pelo carrinhoController)
Sucesso da compra no debito -> paginaprincipal.php (gerenciado pelo carrinhoController)
Trigger da navegação: botão confirmar;


-Tela de Carrinho

Navegação:
Buscar -> buscados.php (gerenciado pelo produto controller)
Logo da aplicação->paginaprincipal.php (gerenciado pelo user controller)
Conta -> conta.php (gerenciado pelo user controller)
Carrinho -> carrinho.php (gerenciado pelo carrinhoController)
sair -> conta.php (gerenciado pelo user controller) -- desloga o usuário
Finalizar Compra -> modal -> 
Credito -> cartaoCredito.php (gerenciado pelo carrinhoController)
Debito -> cartaoDebito.php (gerenciado pelo carrinhoController)

- alert.php ==> só pra gerar a mensagem de alerta de métodos get.

----------------------------

---> Sobre o Model:
Estão na pasta app/model.
Produto.php, Usuario.php e Carrinho.php são as classes que representam o modelo da aplicação.

----------------------------

---> Banco:
Na pasta app, há o código em PHP para conexão e criação do schema do banco -> Database.php.
O banco é o cospobre-db.sqlite (está na raiz do projeto)

----------------------------

---> Sobre a pasta public:
Estão as imagens da aplicação (pasta images), scripts de JavaScript (pasta script) e folhas de estilos de CSS (pasta style).
----------------------------

---> Index.php: Ficam as rotas, iniciação de variáveis globais (como a BASEPATH ) e includes necessários para rodar a aplicação.

----------------------------

---> .htaccess: Está a BASEPATH arrumada (necessário para rodar a aplicação com o WAMP e o XAMPP).