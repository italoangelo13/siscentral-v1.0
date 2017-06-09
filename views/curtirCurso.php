<?php
require_once '../config/conecta_mysql.inc.php';
$codigo = $_REQUEST['codigo'];
$sql = "SELECT curtidas FROM cursos where codigo = $codigo";
$resultado = $mysqli->query($sql);

if($dados = $resultado -> fetch_assoc()){
   $curtidasBD = $dados['curtidas'];
}

$curtidasBD = $curtidasBD + 1;


$sqlUp = "UPDATE cursos SET curtidas = $curtidasBD WHERE codigo = $codigo;";

$resultado2 = $mysqli->query($sqlUp);

if ($resultado2) {
    header("Location: mostraCurso.php?codigo = $codigo");
}
 else {
    header("Location: mostraCurso.php?codigo = $codigo");
}