<?php 
  $dsn = 'pgsql:host=motty.db.elephantsql.com; port=5432; dbname=utuxzuhj';
  $usuario = 'utuxzuhj';
  $senha = 'lUsE8fHZD_mqXupiMEfCg0nOw1ouaKxZ';
  $opcoes = array(
   PDO::ATTR_PERSISTENT => TRUE,
   PDO::ATTR_CASE => PDO::CASE_LOWER
  );
    
  try {
    $pdo = new PDO($dsn, $usuario, $senha, $opcoes);
  } catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
  }
?>
