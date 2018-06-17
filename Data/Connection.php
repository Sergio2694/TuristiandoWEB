<?php

class Connection {

    private $connection;

    /**
     * Método constructor de la clase
     */
    public function Connection() {
        
    }

    /**
     * Método que permite conectar con la base de datos
     */
    public function getConnection() {
        $this->connection = mysqli_connect("163.178.107.130", "laboratorios", "UCRSA.118", "tarea_1_sistemas_expertos_b45770");
        return $this->connection;
    }

    /**
     * Método para cerrar la conexión con la base de datos
     */
    public function closeConnection() {
        mysqli_close($this->connection);
    }

}
