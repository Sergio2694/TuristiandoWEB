<?php

include_once './AdminBusiness.php';

$name = $_POST['name'];
$user = $_POST['user'];
$password = $_POST['password'];

$adminArray = [];
array_push($adminArray, $name);
array_push($adminArray, $user);
array_push($adminArray, $password);

$adminBusines = new AdminBusiness();
$adminBusines->crearAdmin($adminArray);
header("location:../View/ListaAdmin.php");
