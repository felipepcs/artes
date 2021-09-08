<?php
header(string: "Content-type: text/html; charset=utf8");
require_once "classes/alunos.php";
$Alunos = new Alunos();
if(isset($_GET["matricula"])) {
   $dadosAluno = $usuario->listarID($_GET["perfil"]);
}
if(isset($_POST["salvar"])) {
$senha->alterar();
}
?>
