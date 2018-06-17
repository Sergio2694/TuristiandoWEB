<?php

include_once './AdminBusiness.php';

$id = $_POST['id'];

$adminBusines = new AdminBusiness();
$adminBusines->eliminarAdmin($id);
header("location:../View/ListaAdmin.php");
