function insertMarca(){
    var params = {
        'marNombre' : $('input[id=productBrand]').val()
    };
    if ($('input[id=productBrand]').val() === '') {
        alertify.error("Marca no debe ir vacia.");
    }else{
        $.ajax({
            url : '../controller/insertMarca.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
                $("#addMarca").load('../controller/selectMarca.php');
                $("#addMarcaEdit").load('../controller/selectMarcaEdit.php');
                alertify.success("Marca agregada exitosamente.");
                $('input[id=productBrand]').val('');
            }else{
                alertify.error("Marca no agregada.");
            }
        })
    };
};

function insertColor(){
    var params = {
        'colNombre' : $('input[id=productColor]').val()
    };
    if ($('input[id=productColor').val() === '') {
        alertify.error("Color no debe ir vacío.");
    }else{
        $.ajax({
            url : '../controller/insertColor.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
                $("#addColor").load('../controller/selectColor.php');
                $("#addColorEdit").load('../controller/selectColorEdit.php');
                alertify.success("Color agregado exitosamente.");
                $('input[id=productColor]').val('');
            }else{
                alertify.error("Color no agregado.");
            }
        })
    };
};

function loadModalProduct(id, codigo, marca, color, stock){
    $('input[id=editCodigo]').val(codigo);
    $("select[id=editBrand] option").prop('selected', false).filter(function() {
        return $(this).text() == marca;
    }).prop('selected', true);
    $("select[id=editColor] option").prop('selected', false).filter(function() {
        return $(this).text() == color;  
    }).prop('selected', true);
    $('input[id=editStock]').val(stock);
    $('input[id=editId]').val(id);
};

function insertProducto(){
    var params = {
        'proCodigo' : $('input[id=productCode]').val(),
        'proMarca'  : $('select[id=productBrand]').val(),
        'proColor'  : $('select[id=productColor]').val(),
        'proStock'  : $('input[id=productStock]').val(),
        'proDesc'   : $('textarea[id=productDesc]').val()
    };

    if ($('input[id=productCode]').val() === '') {
        alertify.error('Ingrese un código.');
    } else if ($('select[id=productBrand]').val() <= '0') {
        alertify.error('Seleccione una marca.');
    } else if ($('select[id=productColor]').val()  <= '0') {
        alertify.error('Seleccione un color.');
    } else if ($('input[id=productStock]').val() === '') {
        alertify.error('Ingrese el stock');
    } else if ($('textarea[id=productDesc]').val() === '') {
        alertify.error('Ingrese una descripción');
    }else{
        $.ajax({
            url : '../controller/insertProduct.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
                $("#tablaProducts").load('../controller/selectProductAll.php');
                alertify.success('Producto agregado.');
                $('input[id=productCode]').val('');
                $('select[id=productBrand]').val('');
                $('select[id=productColor]').val('');
                $('input[id=productStock]').val('');
                $('textarea[id=productDesc]').val('');
            }else{
                alertify.error('Producto no agregado.');
            }
        })
    };
};

function editProduct(){
    var params = {
        'proId'    : $('input[id=editId]').val(),
        'proCodigo': $('input[id=editCodigo]').val(),
        'proMarca' : $('select[id=editBrand]').val(),
        'proColor' : $('select[id=editColor]').val(),
        'proStock' : $('input[id=editStock]').val()
    };
    alert('id: '+params['proId']+'codigo: '+params['proCodigo']+'marca: '+params['proMarca']+'color: '+params['proColor']+'stock: '+params['proStock']);
    $.ajax({
        url : '../controller/updateProduct.php',
        type : 'post',
        data : params,
        dataType : 'json'
    }).done(function(data){
        if(data.success==true){
            $("#tablaProducts").load('../controller/selectProductAll.php');
            alertify.success('Producto modificado.');
            $('input[id=proId]').val('');
            $('input[id=productCode]').val('');
            $('select[id=productBrand]').val('');
            $('select[id=productColor]').val('');
            $('input[id=productStock]').val('');
            $('textarea[id=productDesc]').val('');
        }else{
            alertify.error('Producto no modificado.');
        }
    })
};

function deleteProduct(){
    var params = {
        'proId'    : $('input[id=proId]').val()
    };
    $.ajax({
        url : '../controller/deleteProduct.php',
        type : 'post',
        data : params,
        dataType : 'json'
    }).done(function(data){
        if(data.success==true){
            $("#tablaProducts").load('../controller/selectProductAll.php');
            alertify.success('Producto eliminado exitosamente.');
            $('input[id=proId]').val('');
            $('input[id=productCode]').val('');
            $('select[id=productBrand]').val('');
            $('select[id=productColor]').val('');
            $('input[id=productStock]').val('');
            $('textarea[id=productDesc]').val('');
        }else{
            alertify.error('Producto no eliminado.');
        }
        location.href="#modal-close";
    })
};

function loadModalClient(id, nombre, rut, fono, direccion, giro){
    $('input[id=editId]').val(id);
    $('input[id=editName]').val(nombre);
    $('input[id=editRut]').val(rut);
    $('input[id=editPhone]').val(fono);
    $('input[id=editGir]').val(giro);
    $('input[id=editAddress]').val(direccion);
};

function insertClient(){
    var params = {
        'clientName' : $('input[id=clientName]').val(),
        'clientRut' : $('input[id=clientRut]').val(),
        'clientPhone' : $('input[id=clientPhone]').val(),
        'clientGir' : $('input[id=clientGir]').val(),
        'clientAddress' : $('input[id=clientAddress]').val()

    };
    if ($('input[id=clientName]').val() === '') {
        alertify.error('Ingrese Nombre ');
    } else if ($('input[id=clientRut]').val() === '') {
        alertify.error('Ingrese Rut');
    }else if ($('input[id=clientPhone]').val() === '') {
        alertify.error('Ingrese Fono');
    }else if ($('input[id=clientAddress]').val() === '') {
        alertify.error('Ingrese Dirección');
    }else{
        $.ajax({
            url : '../controller/insertClient.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
                $("#tablaClients").load('../controller/selectClientAll.php');
                alertify.success('Cliente agregado exitosamente.');
                $('input[id=clientName]').val('');
                $('input[id=clientRut]').val('');
                $('input[id=clientPhone]').val('');
                $('input[id=clientGir]').val('');
                $('input[id=clientAddress]').val('');
            }else{
                alertify.error('cliente no agregado.');
            }
        })
    };
};

function editClient(){
    var params = {
        'cliId'         : $('input[id=editId]').val(),
        'clientName'    : $('input[id=editName]').val(),
        'clientRut'     : $('input[id=editRut]').val(),
        'clientPhone'   : $('input[id=editPhone]').val(),
        'clientGir'     : $('input[id=editGir]').val(),
        'clientAddress' : $('input[id=editAddress]').val()
    };
    alert('id:'+params['cliId']+' nombre:'+params['clientName']+' rut:'+params['clientRut']+' phone:'+
        params['clientPhone']+' giro:'+params['clientGir']+' direccion:'+params['clientAddress']);
    $.ajax({
        url : '../controller/updateClient.php',
        type : 'post',
        data : params,
        dataType : 'json'
    }).done(function(data){
        if(data.success==true){
            $("#tablaClients").load('../controller/selectClientAll.php');
            alertify.success('Cliente modificado.');
            $('input[id=editId]').val('');
            $('input[id=editName]').val('');
            $('input[id=editRut]').val('');
            $('input[id=editPhone]').val('');
            $('input[id=editGir]').val('');
            $('input[id=editAddress]').val('');
        }else{
            alertify.error('Cliente no modificado.');
        }
        location.href="#modal-close";
    })
};

function deleteClient(){
    var params = {
        'cliId'    : $('input[id=cliId]').val()
    };
    $.ajax({
        url : '../controller/deleteClient.php',
        type : 'post',
        data : params,
        dataType : 'json'
    }).done(function(data){
        if(data.success==true){
            $("#tablaClients").load('../controller/selectClientAll.php');
            alertify.success('Cliente eliminado exitosamente.');
            $('input[id=cliId]').val('');
            $('input[id=clientName]').val('');
            $('select[id=clientRut]').val('');
            $('select[id=clientPhone]').val('');
            $('input[id=clientGir]').val('');
            $('textarea[id=clientAddress]').val('');
        }else{
            alertify.error('Cliente no eliminado.');
        }
        location.href="#modal-close";
    })
};