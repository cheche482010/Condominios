$(document).ready(function() {
    $("#Guardar").click(function() {
        if (validaForm()) {
            var dolar = $('#dolar').val() 
            $.ajax({
                type: 'POST',
                url: 'dolarDiario',
                data: {
                    'dolar': dolar
                }
            }).done(function(datos) {
                $('#texto').html(datos)
            }).fail(function() {
                alert("error")
            })
        }
    });
});
 
function validaForm() {
    if ($("#dolar").val() == "") {
        alert("El campo dolar no puede estar vacío.");
        $("#dolar").focus();
        return false;
    }
    return true; // Si todo está correcto
}