$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'Dolar_Dia'
    }).done(function(datos) {
        $('#texto').html(datos)
    }).fail(function() {
        alert("error")
    })
    $("#Guardar").click(function() {
        var dolar = $('#dolar').val()
        var x = new Intl.NumberFormat({
            maximumSignificantDigits: 2
        }).format(dolar);
        var y = ",00";
        var resp = x.concat(y);
        $.ajax({
            type: 'POST',
        }).done(function(datos) {
            $('#datos').html(resp)
        }).fail(function() {
            alert("error")
        })
    });
});