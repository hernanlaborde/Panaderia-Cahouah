var _messageMaxLn = "Longitud no válida";
//REGISTRO
$(document).on('submit', '#formRegistro', function (e) {
    ///<summary>Crea un registro en la web de la panaderia.</summary>
    e.preventDefault();

    //Enviar contacto ajax
    if ($("#formRegistro").valid()) {
        $.ajax({
            url: 'procesar_registro.php',
            type: 'POST',
            data: $("#formRegistro").serialize(),
            success: function (e) {
                $("input[name='nombre']").val("");
                $("input[name='apellido']").val("");
                $("input[name='telefono']").val("");
                $("input[name='direccion']").val("");
                $("input[name='usuario']").val("");
                $("input[name='contrasena']").val("");
                $("input[name='email']").val("");
                alert('Gracias por registrarse.');
            },
            error: function (e) {
                alert(e.responseText);
            }
        });
    }
});
//LOGIN
$(document).on('submit', '#formLogin', function (e) {
    ///<summary>Iniciar sesión en la web de la panaderia.</summary>
    e.preventDefault();

    //Login ajax
    if ($("#formLogin").valid()) {
        $.ajax({
            url: '1_procesar_login.php',
            type: 'POST',
            data: $("#formLogin").serialize(),
            success: function () {
                window.location.href = '1_area_privada.php';
            },
            error: function (e) {
                alert(e.responseText);
            }
        });
    }
});
//VALIDACIÓN REGISTRO
var setupValidateRegister = function () {
    //Validar formulario
    $("#formRegistro").validate({
        rules: {
            nombre: {
                required: true,
                maxlength: 80,
                regex: /^[a-zA-Záéíóúñ ]+$/
            },
            apellido: {
                required: true,
                maxlength: 80,
                regex: /^[a-zA-Záéíóúñ ]+$/
            },
            telefono: {
                required: true,
                maxlength: 15,
                regex: /^[0-9 ]+$/
            },
            direccion: {
                required: true,
                maxlength: 100,
                regex: /^[a-zA-Z0-9#. ]+$/
            },
            usuario: {
                required: true,
                maxlength: 50,
                regex: /^[a-zA-Z0-9 ]+$/
            },
            contrasena: {
                required: true,
                maxlength: 50
                //regex: /^[a-zA-Z0-9 ]+$/
            },
            email: {
                required: true,
                email: true,
                regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            }
        },
        messages: {
            nombre: {
                required: "El campo nombre es requerido",
                regex: "Sólo se permiten letras",
                maxlength: _messageMaxLn
            },
            apellido: {
                required: "El campo apellido es requerido",
                regex: "Sólo se permiten letras",
                maxlength: _messageMaxLn
            },
            telefono: {
                required: "El campo teléfono es requerido",
                regex: "Sólo se permiten números",
                maxlength: _messageMaxLn
            },
            direccion: {
                required: "El campo dirección es requerido",
                regex: "Ingrese una dirección válida",
                maxlength: _messageMaxLn
            },
            usuario: {
                required: "El campo usuario es requerido",
                regex: "Sólo se permiten letras",
                maxlength: _messageMaxLn
            },
            contrasena: {
                required: "El campo contraseña es requerido",
                maxlength: _messageMaxLn
                //regex: "Sólo se permiten letras"
            },
            email: {
                required: "El campo e-mail es requerido",
                email: "Ingrese un e-mail válido",
                maxlength: _messageMaxLn,
                regex: "Ingrese un e-mail válido"
            }
        }
    });
};
//VALIDACIÓN LOGIN
var setupValidateLogin = function () {
    $("#formLogin").validate({
        rules: {
            nombreLogin: {
                required: true,
                maxlength: 80,
                regex: /^[a-zA-Záéíóúñ ]+$/
            },
            contrasenaLogin: {
                required: true,
                maxlength: 50
            }
        },
        messages: {
            nombreLogin: {
                required: "El campo nombre es requerido",
                regex: "Sólo se permiten letras",
                maxlength: _messageMaxLn
            },
            contrasenaLogin: {
                required: "El campo contraseña es requerido",
                maxlength: _messageMaxLn
            }
        }
    });
};


//LIBRETA DE DIRECCIONES
var cargarLibreta = function() {
	    $.ajax({
        url: 'consultar_libreta.php',
        type: 'POST',
        //dataType: 'application/json',
		cache: false,
        success: function (response) {
			$("#datosLibreta").html(response);
        },
        error: function (e) {
			alert(e.responseText);
        }
    });
};

//Se agrega método a validate para expresiones regulares.
$.validator.addMethod(
        "regex",
        function (value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
);