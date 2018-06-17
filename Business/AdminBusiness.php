<?php

include_once '../Data/AdminData.php';

class AdminBusiness {

    public function AdminBusiness() {
        $this->adminData = new AdminData();
    }
	
	public function crearAdmin($inputArray) {
        $result = $this->adminData->crearAdmin($inputArray);
    }
	
	public function listaAdmin() {
        $result = $this->adminData->listaAdmin();
        return $result;
    }
	
	public function eliminarAdmin($id) {
        $result = $this->adminData->eliminarAdmin($id);
    }
}
