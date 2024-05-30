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


    public function loginIndex()
    {
        if (!$this->loggedUser) {
            $this->view('conta');
        } else { /**mais tarde isso seria substituido por uma tela de informação de usuario.**/
            header('Location:'. BASEPATH .'home?mensagem=Você já está logado!!');
        }
    }

    public function cadastrarIndex()
    {
        $this->view('cadastro');
        
    }
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

    public function home()
    {
        
        $this->view('paginaprincipal');
    }


   /**Não usada nessa implementação ainda, seria para uma listagem de usuários para o usuário admin. */ 
    public function lista()
    {
        $usuarios = Usuario::buscarTodos();
        $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "suporte@login.com");
        $this->view('listar', $usuarios);
    }
    public function sair()
    {
        if (!$this->loggedUser) {
            
            header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
            return;
        }
        unset($_SESSION['user']);
        header('Location:'. BASEPATH .'login');
        header('Location: ' . BASEPATH . 'login?mensagem=Usuário deslogado com sucesso!');
    }


   
    
    
}
 

    ?>