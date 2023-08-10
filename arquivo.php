<?php

$matricula  = $_POST["matricula"];    // Campos "name" inseridos no <form>
$nome = $_POST["nome"];


$alunos = [];  // Variável usada para guardar os dados acima no formato JSON.



$resposta = 
      [
         "matricula"  => $matricula,
         "nome" => $nome
      ];

array_push($alunos, $resposta);

$json_texto = json_encode(["alunos" => $alunos]);
include("conecta.php");

$comando = $pdo->prepare("INSERT INTO alunos VALUES ($matricula,\"$nome\")");
$resultado = $comando->execute();
 echo($json_texto);
?>