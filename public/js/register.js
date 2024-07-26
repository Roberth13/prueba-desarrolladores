$(document).ready(function(){
    console.log('Register.js Cargado')

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#submit-form").on('click', function(){
        event.stopPropagation();
        var nombres = $("#nombres").val();
        var correo = $("#correo").val();
        var contrasena = $("#contrasena").val();
        var contrasena_rp = $("#contrasena_rp").val();
        if(contrasena.length < 6){
            alert("La contraseña debe contener minimo 6 caracteres")
        }else if(contrasena !== contrasena_rp){
            alert("Las contraseñas no coinciden")
        }else{
            let data ={
                email: correo,
                name: nombres,
                password: contrasena,
                confirmed: contrasena_rp
            }
            $.ajax({
                url: "/register",
                type: 'POST',
                dataType: "json",
                data: data,
                success: function(data) {
                    console.log(data)
                    $('#alert-msg').html('Usuario creado...');                    
                    $('#alert-msg').addClass('alert-success');                    
                    $('#alert-msg').css('display', 'block');        
                    
                    setTimeout(() => {
                        window.location.href = "/home";
                    }, 2000);
                },
                error: function(data) { 
                    console.log(data.responseJSON)
                    $('#alert-msg').html(data.responseJSON.message);                    
                    $('#alert-msg').addClass('alert-danger');                    
                    $('#alert-msg').css('display', 'block');    
                }
            });
        }
    })
})