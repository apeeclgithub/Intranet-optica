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
                $('input[id=productBrand]').val();
                $("#productBrand").load('../controller/selectMarca.php');
                alertify.success("Marca agregada exitosamente.");
            }else{
                alertify.error("Marca no agregada.");
            }
        })
    };
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
        alertify.error('clientName vacio');
    } else if ($('input[id=clientRut]').val() === '') {
        alertify.error('clientRut vacio');
    }else if ($('input[id=clientPhone]').val() === '') {
        alertify.error('clientPhone vacio');
    }else if ($('input[id=clientAddress]').val() === '') {
        alertify.error('clientAddress vacio');
    }else{
    $.ajax({
        url : '../controller/insertClient.php',
        type : 'post',
        data : params,
        dataType : 'json'
    }).done(function(data){
        if(data.success==true){
            alertify.success('Cliente agregado.');
        }else{
            alertify.error('cliente no agregada');
        }
    })
    };
};

function insertProducto(){
    var params = {
        'proCodigo' : $('input[id=productCode]').val(),
        'proMarca' : $('select[id=productBrand]').val(),
        'proColor' : $('select[id=productColor]').val(),
        'proStock' : $('input[id=productStock]').val(),
        'proDesc' : $('textarea[id=productDesc]').val()
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
                $('input[id=productColor]').val('');
                location.href='#addProductPanel';
                alertify.success("Color agregado exitosamente.");
            }else{
                alertify.error("Color no agregado.");
            }
        })
    };
};

function editarProducto(codigo, marca, color, stock){
    $('input[id=editCodigo]').val(codigo);
    $('input[id=editStock]').val(stock);
};