var id, token;

function init() {
    limpiar();
    $("#formAcceso").on('submit', function (e) {
        ingresar(e);
    });

 $("#form-registro").on('submit', function (e) {
        e.preventDefault();
        verificar_datos();
    })
    $("#frmRecuperarPassword").on('submit', function (e) {
        enviar_email(e);
    })
    id_token();
}

function limpiar() {
    $("#form-registro")[0].reset();
    $("#logina").val("");
    $("#clavea").val("");
}

function validate() {
    logina = $("#logina").val();
    clavea = $("#clavea").val();
    $.post("../ajax/ajlogin.php?op=verificar", { "logina": logina, "clavea": clavea }, function (data) {
        if (data != "null") {
            $(location).attr("href", "vihome.php");
        } else {
            bootbox.alert("Usuario y/o Password incorrectos");
            $("#clavea").val('');
        }
    });
}

function registrar_usuario() {
    var formData = new FormData($("#form-registro")[0]);
        //console.log($("#form-registro").serialize());
        $.ajax({
            url: "../ajax/ajlogin.php?op=guardaryeditar_usuario",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (datos) {
                bootbox.alert(datos);
            }
        });
        limpiar();
}

function enviar_email(e) {
    e.preventDefault();
    emailr = $("#emailr").val();

    $.post("../ajax/ajlogin.php?op=enviaremail", { "emailr": emailr }, function (data) {
        if (data != "null") {
            bootbox.alert(data);
            recuperar_password(false);
            $("#emailr").val("");
        } else {
            bootbox.alert(data);
        }
    });
}

function restablecer_password(e) {
    e.preventDefault();
    clave1 = $("#clavec1").val();
    clave2 = $("#clavec2").val();
    if (verificar_password(clave1, clave2)) {
        $.post("../ajax/ajlogin.php?op=restablecerpassword", { "id": id, "token": token, "claver": clave1 }, function (data) {

            if (data != "null") {
                bootbox.alert(data);
                modal_cambiar_password(false);
                $("#clavec1").val("");
                $("#clavec2").val("");
            } else {
                bootbox.alert(data);
            }
        });
    } else {
        bootbox.alert("Las contraseñas no coinciden");

    }
}

function verificar_password(clave1, clave2) {
    if (clave1 == clave2) {
        return 1;
    } else {
        return 0;
    }
}

$('#modal-galeria').on('show');
function modal_registro(flag) {
    if (flag) {

        $("#modal-registro").show();
    } else {
        $("#modal-registro").hide();
    }
}

function recuperar_password(flag) {
    if (flag) {
        $("#recuperar_password").show();
    } else {
        $("#recuperar_password").hide();
        $("#frmRecuperarPassword")[0].reset();
    }
}
function modal_cambiar_password(flag) {
    if (flag) {
        $("#cambiar_password").show();
    } else {
        $("#cambiar_password").hide();
    }
}


function modal_vista(flag) {
    if (flag) {
        $("#ejemplo").show();
    } else {
        $("#ejemplo").hide();
    }
}

function modal(flag, nombreModal) {
    if (flag) {
        $(nombreModal).show();
    } else {
        $(nombreModal).hide();
    }
}
function verificar_datos()
{
    var nomb = $("#nombre").val();
    var apel = $("#apellidos").val();
    var emai = $("#email").val();
    var tele = $("#telefono").val();
    var logi = $("#login").val();
    var cl1 = $("#clave1").val();
    var cl2 = $("#clave2").val();

        if(nomb==""){
        var box = bootbox.alert("No puede dejar el campo de nombre vacio");
        box.on('hidden.bs.modal',function(){
        $("#nombre").focus();
        })
        return;
        }
        if(apel==""){
        var box = bootbox.alert("No puede dejar el campo de apellidos vacio");
        box.on('hidden.bs.modal',function(){
        $("#apellidos").focus();
        })
        return;
        }
        if(emai==""){
        var box = bootbox.alert("No puede dejar el campo de email vacio");
        box.on('hidden.bs.modal',function(){
        $("#email").focus();
        })
        return;
        }else{
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!expr.test(emai)){

        var box = bootbox.alert("Favor de ingresar un email valido");
        box.on('hidden.bs.modal',function(){
        $("#email").focus();
        })
        return;
        }
        }
        if(tele==""){
        var box = bootbox.alert("No puede dejar el campo de teléfono vacio");
        box.on('hidden.bs.modal',function(){
        $("#telefono").focus();
        })
        return;
        }

        if(logi==""){
        var box = bootbox.alert("No puede dejar el campo de usuario vacio");
        box.on('hidden.bs.modal',function(){
        $("#login").focus();
        })
        return;
        }

        if(cl1==""){
        var box = bootbox.alert("No puede dejar el campo de password vacio");
        box.on('hidden.bs.modal',function(){
        $("#clave1").focus();
        })
        return;
        }
        if(cl2==""){
        var box = bootbox.alert("No puede dejar el campo de confirmación de password vacio");
        box.on('hidden.bs.modal',function(){
        $("#clave2").focus();
        })
        return;
        }

        if (cl1 != cl2) {
        var box = bootbox.alert("Las contraseñas no coinciden");
        box.on('hidden.bs.modal',function(){
        $("#clave1").val("");
        $("#clave2").val("");
        $("#clave1").focus();
        })
        return;
        }
    registrar_usuario();
}

$("#login").blur(function(){
        var login_data = $("#login").val();
        $.ajax({
            url: "../ajax/ajlogin.php?op=verificarusuario",
            type: "POST",
            data:{
                'data':login_data
            },
            success: function(data){
        if (data == 1) {
        var box = bootbox.alert("El usuario  ya está en uso");
        box.on('hidden.bs.modal',function(){
        $("#login").val("");
        $("#login").focus();
        })
        }
        return;
            }
        });
    });

  $("#email").blur(function(){
        var email_data = $("#email").val();

        if(email_data.length > 6){
            $.ajax({
            url: "../ajax/ajlogin.php?op=verificaremail",
            type: "POST",
            data:{
                'data':email_data
            },
            success: function(data){
        if (data == 1) {
        var box = bootbox.alert("El email ya está en uso");
        box.on('hidden.bs.modal',function(){
        $("#email").val("");
        $("#email").focus();
        })
        }
        return;
            }
        });
            }
    });

$("#telefono").blur(function(){
        var telefono_data = $("#telefono").val();
        $.ajax({
            url: "../ajax/ajlogin.php?op=verificartelefono",
            type: "POST",
            data:{
                'data':telefono_data
            },
            success: function(data){
        if (data == 1) {
        var box = bootbox.alert("El teléfono ya está en uso");
        box.on('hidden.bs.modal',function(){
        $("#telefono").val("");
        $("#telefono").focus();
        })
        }
        return;
            }
    });
})

function soloNumeros(e){
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}

function id_token() {
    var valores = getGET();
    if (valores) {
        id = valores['id'];
        token = valores['token'];
        $.post("../ajax/ajlogin.php?op=validartoken", { "idv": id, "tokenv": token }, function (data) {
            if (data != "null") {
                modal_cambiar_password(true);
                $("#formCambiarPassword").on('submit', function (e) {
                    restablecer_password(e);
                })
            } else {
                bootbox.alert("Tiempo email excedido.!");
            }
        });
    }
}

function getGET() {
    var loc = document.location.href;
if (loc.indexOf('?') > 0) {
        var getString = loc.split('?')[1];
        var GET = getString.split('&');
        var get = {};
        for (var i = 0, l = GET.length; i < l; i++) {
            var tmp = GET[i].split('=');
            get[tmp[0]] = unescape(decodeURI(tmp[1]));
        }
        return get;
    }
}

init();

function show() {
    var p = document.getElementById('clavea');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('clavea');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function() {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
