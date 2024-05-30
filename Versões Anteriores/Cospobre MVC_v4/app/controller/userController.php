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
        } else {
            header('Location:'. BASEPATH .'home');
        }
    }

    public function cadastrarIndex()
    {
        $this->view('cadastro');
        
    }
    public function cadastrar()
    {
        $user = new Usuario( $_POST['nome'], $_POST['dia'],$_POST['mes'],$_POST['ano'],$_POST['endereco'],$_POST['cep'],$_POST['telefone'],$_POST['email'], $_POST['senha'],$_POST['subscribe']);
        $user->salvar();
        header('Location: ' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
        

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

    public function carrineo()
    {
        $this->view('carrinho/carrinho');
    }
    public function lista()
    {
        $usuarios = Usuario::buscarTodos();
        $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "suporte@login.com");
        $this->view('listar', $usuarios);
    }
}


    ?>