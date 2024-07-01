<?php

class controllerPacientes {

    public function listarPacientes() {
        try {
            $modelPacientes = new modelPacientes();
            return $modelPacientes->listarPacientes();
        } catch (PDOException $e) {
            return false;
        }
    }

}