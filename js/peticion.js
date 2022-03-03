
//para HOSTELS

$(obtener_registros());

function obtener_registros(hostel) {
    $.ajax({
        url: 'consulta.php',
        type: 'POST',
        dataType: 'html',
        data: { hostel: hostel},
    })

        .done(function (resultado) {
            console.log("[Aqui empiezo]"+ resultado)+"[Aqui termino]";
            $("#tabla-resultado").html(resultado); 
    })
}
$(document).on('keyup', '#busqueda', function () {
    
    var valorBusqueda = $(this).val();

    if (valorBusqueda != "") {
        obtener_registros(valorBusqueda); 
    } else {
        obtener_registros(); 
    }
})

///para JOBS
$(obtener_registrosJob());

function obtener_registrosJob(jobs) {
    $.ajax({
        url: 'consultaJob.php',
        type: 'POST',
        dataType: 'html',
        data: { jobs: jobs},
    })

        .done(function (resultado) {
           
            $("#tablaResultado").html(resultado); 
    })
}
$(document).on('keyup', '#idBusqueda', function () {
    
    var valorBusqueda = $(this).val();

    if (valorBusqueda != "") {
        obtener_registrosHotel(valorBusqueda); 
    } else {
        obtener_registrosHotel(); 
    }
})