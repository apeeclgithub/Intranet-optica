<?php
session_start();
require_once '../model/classCarrito.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 0;
}

switch($page){

    case 1:
    
    $articulo = array(
        "id"            => intval(@$_POST["id"]),
        "cantidad"      => intval(@$_POST["cantidad"]),
        "precio"        => intval(@$_POST["precio"]),
        "codigo"        => @$_POST["codigo"],
        "descripcion"   => @$_POST["descripcion"]
    );
    $carrito->add($articulo);
    
    $json['success'] = true;
    echo json_encode($json);
    
    break;
    
    
    case 2:
    
    $articulo = $_POST["id"];
    
    $carrito->remove_producto($articulo);
    
    $json['success'] = true;
    echo json_encode($json);
    
    break;
    
    case 3:
    
    
    $carrito->destroy();
    
    
    break;
    
}

?>