<?php 

require 'Controlador.php';

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
            header('Location:'. BASEPATH .'login');
        } else {
            header('Location:'. BASEPATH .'login?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
        }
    }


    public function loginIndex()
    {
        if (!$this->loggedUser) {
            $this->view('conta');
        } else {
            header('Location:'. BASEPATH .'home');
        }
    }

    public function cadastrarIndex()
    {
        $this->view('cadastro');
    } 

    public function home()
    {
        
        $this->view('paginaprincipal');
    }

    public function acessories()
    {
        $this->view('acessorios');
    }
    public function peruquitas()
    {
        $this->view('peruca');
    }

}


    ?>