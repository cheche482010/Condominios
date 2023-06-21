$(document).ready(function() {
    $('#buscar').on('click', function() {
        var mes = $('#mes').val()
        $.ajax({
            type: 'POST',
            url: 'dolarMes',
            data: {
                'mes': mes
            }
        }).done(function(datos) {
            $('#estado').val(datos)

        }).fail(function() {
            alert("error")
        }) 
    })
})
