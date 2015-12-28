function insertMarca(){
    var params = {
        'marNombre' : $('input[id=productBrand]').val()
    };
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
    });
};