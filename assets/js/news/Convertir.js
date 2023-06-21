$(document).ready(function() {
    $('#convertir').on('click', function() {
        var bolivar = $('#bolivar').val()
        var mes = $('#mes').val()
        $.ajax({
            type: 'POST',
            url: 'dolarConvertir',
            data: {
                'bolivar': bolivar,
                'mes': mes
            }
        }).done(function(datos) { 
            $('#dolar').val(datos)
        }).fail(function() {
            alert("error")
        })
    })

})