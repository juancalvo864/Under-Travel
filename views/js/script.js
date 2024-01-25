$("#email_signup").change(function() {
    $(".alerta").remove();

    let email = $(this).val();
    console.log(email);

    let datos = new FormData();
    datos.append("validarEmail", email);

    $.ajax({
        url: "ajax/forms.ajax.php",
        method: "POST",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType: "json",
        success: function(response) {
            if(response){
                $("#email_signup").val("");
                $("#email_signup").parent().after(`
                <div class="alerta alerta-advertencia">
                    <strong>
                        ERROR:
                    </strong>
                    <p>El correo electronico ya existe en la base de datos, por favor ingrese uno diferente</p>
                </div>          
                `)
            }
        }
    })
})