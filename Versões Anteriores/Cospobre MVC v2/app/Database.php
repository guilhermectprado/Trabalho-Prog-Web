<?php 
  /*$dsn = 'pgsql:host=motty.db.elephantsql.com; port=5432; dbname=utuxzuhj';
  $usuario = 'utuxzuhj';
  $senha = 'lUsE8fHZD_mqXupiMEfCg0nOw1ouaKxZ';
  $opcoes = array(
   PDO::ATTR_PERSISTENT => TRUE,
   PDO::ATTR_CASE => PDO::CASE_LOWER
  );
  
  try {
    $conexao = new PDO($dsn, $usuario, $senha, $opcoes);
    echo 'Conetado com sucesso!';
  } catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
  }*/

class Database {
  static $con;

    static public function getConnection()
    {
        if (isset(self::$con)) {
          return self::$con;
          //SE JA TA CONECTADO, SÓ RETORNA CONEXÃO
        }

        else {
          try {
            self::$con = new PDO('pgsl:host=motty.db.elephantsql.com', 'utuxzuhj', 'lUsE8fHZD_mqXupiMEfCg0nOw1ouaKxZ');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$con;
            //SE NÃO CONECTADO, TENTA FAZER CONEXÃO
          }
          
          catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            //É PRA RETORNAR O ERRO AO NÃO CONSEGUIR CONECTAR
          };
      };
    }
}
?>