$(document).ready(function(){
    $("#formularioperro").validate({
        rules:{
            txtRut:{
                required:true,
                minlenght:10
            },
            
        },
        messages:{
            required:"Campo Requerido",
            minlenght: "Debe ser formato chileno"
        }
    })
})


