$(function(){
    $("#GanadorFormGanadorForm").on('submit',function(event){
        var nombre = $("#GanadorNombre").val();
        var email  = $("#GanadorEmail").val();
        var sucursal = $("#GanadorSucursal").val();
        var valid = true;
        if(!nombre)
            valid = false;
        if(!email || !validar_email(email))
            valid = false;
        if(!sucursal)
            valid = false;
        if(!valid)
            alert("Existen errores en el formulario");
        return valid;
    })
});
function validar_email(valor)
    {
        // creamos nuestra regla con expresiones regulares.
        var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        // utilizamos test para comprobar si el parametro valor cumple la regla
        if(filter.test(valor))
            return true;
        else
            return false;
    }