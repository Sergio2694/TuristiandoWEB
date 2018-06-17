<?php

include_once '../Data/Connection.php';

class AdminData {

    public function crearAdmin($inputArray) {
		$connection = new Connection();
        $conn = $connection->getConnection();
        $query = "INSERT INTO `admin`(`name`, `user`, `password`, `deleted`) VALUES ('".$inputArray[0]."', '".$inputArray[1]."', '".$inputArray[2]."', 0)";
        $result = mysqli_query($conn, $query);
        $connection->closeConnection();
    }

	public function listaAdmin() {
		$connection = new Connection();
        $conn = $connection->getConnection();
        $query = "SELECT * FROM `admin` WHERE `deleted`=0";
        $result = mysqli_query($conn, $query);
		$lista = array();
		while ($row = mysqli_fetch_array($result)) {
			array_push($lista, $row);
		}
        $connection->closeConnection();
		return $lista;
    }
	
	public function eliminarAdmin($id) {
		$connection = new Connection();
        $conn = $connection->getConnection();
		echo $id;
        //$query = "UPDATE `admin` SET `deleted`=1 WHERE `id`=".$id;
        $result = mysqli_query($conn, $query);
        $connection->closeConnection();
    }
}