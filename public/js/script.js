function insertMarca(){
    var params = {
        'marNombre' : $('input[id=productBrand]').val()
    };
    if ($('input[id=productBrand]').val() === '') {
        alert('marca vacio');
    }else{
        $.ajax({
            url : '../controller/insertMarca.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
            //alertify.success("Carro actualizado.");
            alert('marca agregada');
        }else{
            //alertify.error("Producto no agregado.");
            alert('marca no agregada');
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
    $.ajax({
        url : '../controller/insertClient.php',
        type : 'post',
        data : params,
        dataType : 'json'
    }).done(function(data){
        if(data.success==true){
            //alertify.success("Carro actualizado.");
            alert('cliente agregada');
        }else{
            //alertify.error("Producto no agregado.");
            alert('cliente no agregada');
        }
    });
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
        alert('codigo vacio');
    } else if ($('select[id=productBrand]').val() <= '0') {
        alert('marca vacio');
    } else if ($('select[id=productColor]').val()  <= '0') {
        alert('productColor vacio');
    } else if ($('input[id=productStock]').val() === '') {
        alert('productStock vacio');
    } else if ($('textarea[id=productDesc]').val() === '') {
        alert('productDesc vacio');
    }else{
        $.ajax({
            url : '../controller/insertProduct.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
            //alertify.success("Carro actualizado.");
            alert('producto agregada');
        }else{
            //alertify.error("Producto no agregado.");
            alert('producto no agregada');
        }
    })
    };
};

function insertColor(){
    var params = {
        'colNombre' : $('input[id=productColor]').val()
    };
    if ($('input[id=productColor').val() === '') {
        alert('color vacio');
    }else{
        $.ajax({
            url : '../controller/insertColor.php',
            type : 'post',
            data : params,
            dataType : 'json'
        }).done(function(data){
            if(data.success==true){
            //alertify.success("Carro actualizado.");
            alert('color agregada');
        }else{
            //alertify.error("Producto no agregado.");
            alert('color no agregada');
        }
    })
    };
};