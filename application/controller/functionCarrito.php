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
    ?>
    
    <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="amountSaleTotal" 
    value="<?php echo $carrito->precio_total();?>">
    <label for="amountSaleTotal">Total</label>
    <span class="mdl-textfield__error">Ingresar solo números</span>
    
    <?php
    break;
    
}

?>