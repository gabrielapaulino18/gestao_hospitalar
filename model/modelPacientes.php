<?php

class modelPacientes {

    public function listarPacientes() {
        try {
            $pdo = Database::conexao();
            $listar = $pdo->query("SELECT * FROM tbl_paciente");
            $resultado = $listar->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }
}