<?php 

namespace App\Controller;

use App\Model\Usuario;

use PDOException;

/**
* Esta classe estende a classe abstrata Controller
* e
* é responsável por chamar a view correta para os tratamentos de login/
* informações/cadastro de usuários
* passando os dados fornecidos pelo usuário. 
*/
class userController extends Controller  {
    
    /**
    * 
    * @var Usuario O usuário que será chamado (ou cadastrado)
    */
    private $loggedUser;
    
    /**
    *  Este método cria uma sessão
    * a qual irá armazenar o(s) usuário(s).
    */
    function __construct() {
        session_start();
        if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
    }
    
/**loga o usuário se ele existir */
    public function login()
    {
        $usuario = Usuario::buscarUsuario($_POST['email']);
        if ($usuario && $usuario->igual($_POST['email'], $_POST['senha'])) {
            $_SESSION['user'] = $this->loggedUser = $usuario;
            header('Location:'. BASEPATH .'home');
        } else {
            header('Location:'. BASEPATH .'login?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
        }
    }

 /**vai para o login ou para as informações do usuario se logado */
    public function loginIndex()
    {
        if (!$this->loggedUser) {
            $this->view('usuario/conta');
        } else { 
            header('Location:'. BASEPATH .'info');
        }
    }
 /**vai para o cadastro */
    public function cadastrarIndex()
    {
        $this->view('usuario/cadastro');
        
    }
     /**cadastra o usuario */
    public function cadastrar()
    {
        try {
            $user = new Usuario( $_POST['nome'], $_POST['dia'],$_POST['mes'],$_POST['ano'],$_POST['endereco'],$_POST['cep'],$_POST['telefone'],$_POST['email'], $_POST['senha'],$_POST['subscribe']);
            $user->salvar();
            header('Location:' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
        } catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'register?email=' . $_POST['email'] . '&mensagem=Email já cadastrado!');
        }
    }
 /**vai para a pagina principal da aplicação */
    public function home()
    {
        
        $this->view('paginaprincipal');
    }

    public function info(): void
    {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login?acao=entrar&mensagem=Você precisa se identificar primeiro');
            return;
        }
        $this->view('usuario/info', $this->loggedUser);
        
        
    }

   /**para uma listagem de usuários para o usuário admin. */ 
    public function lista()
    {  
        if ($this->loggedUser->email != "admin@admin.com"){
        header('Location: ' . BASEPATH . 'home?&mensagem=Você não tem permissão querida!');
        return;
        }   
        else{
            $usuarios = Usuario::buscarTodos();
            $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "suporte@login.com");
            $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "admin@admin.com");
            $this->view('usuario/admin/listar', $usuarios);
        }
        
    }
 /**desloga o usuário. */
 public function sair(): void
 {
     if (!$this->loggedUser) {
         header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
         return;
     }
     unset($_SESSION['user']);
     header('Location: ' . BASEPATH . 'login?mensagem=Usuário deslogado com sucesso!');
 }


   
    
    
}
 

    ?>