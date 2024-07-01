<?php

include_once("services/conexao.php");
include_once("controller/controllerPacientes.php");
include_once("model/modelPacientes.php");

$controllerPacientes = new controllerPacientes();
$resultado = $controllerPacientes->listarPacientes();

if ($resultado) {
    $msg = array("pacientes" => $resultado);
    echo json_encode($msg);
} else {
    echo json_encode( "deu ruim");
}