
window.onload = function () {/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    OcultForm('document');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
    OcultForm1('paquet');
    //valida('weight');
    OcultForm2('ocultaCampos');
    OcultForm3('ocultaCampos1');    
    //OcultInputTracking();
}

//function showAlertBox(text, color) {
//    $("[id *= 'loadingSpinner']").hide();
//    $("[id *= 'alertBox']").addClass('alert alert-' + color);
//    $("[id *= 'alertBox']").text(text);
//    $("[id *= 'alertBox']").fadeIn('slow', function () {
//        $(this).delay(5000).fadeOut('slow', function () {
//            $("[id *= 'loadingSpinner']").show();
//            $(this).text("");
//            document.getElementById('alertBox').className = '';
//            $("[id*='loadingContentModal']").modal('hide');
//        });
//    });
//}
//function fireCustomFacebookAction() {
//    fbq('trackCustom', 'public_quote', {
//        channel: "Public",
//        quote_from: $('#quote_from').val(),
//        quote_to: $('#quote_to').val(),
//        shipment_type: $("input[name=shipment_type]:checked").val(),
//        document_weight: $('#weight').val(),
//        total_physical: $("#total-physical").text(),
//        total_volumetric: $("#total-volumetric").text(),
//        total_invoiced: $("#total-invoiced").text(),
//        insurance: $("input[name=insured_amount]").val()
//    }
//    );
//}
function soloNumeros(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}
function OcultForm() {    
    $("#document").hide();
    $("#paquet").hide();
    $("#optradio").click(function () {
        if ($("#optradio").is(":checked")) {
            $("#document").show();
            $("#paquet").hide();           
        } else {
            $("#document").hide();
            $("#paquet").show();
        }
    });  
    if ($("#optradio").is(":checked")) {
        $("#document").show();
        $("#paquet").hide();
    } else {
        $("#document").hide();
        //$("#paquet").show();
    }
}
$(document).ready(function () {


    
});
function OcultForm1() {
    var largo = $.trim($("#largo").val());
    var ancho = $.trim($("#ancho").val());
    var alto = $.trim($("#alto").val());
    var peso = $.trim($("#peso").val());
    //$("#document").hide();
    $("#paquet").hide(); 
    $("#optradio2").click(function () {
        if ($("#optradio2").is(":checked")) {
            $("#paquet").show();
            $("#document").hide();
        } else {
            $("#paquet").hide();
            $("#document").show();
        }
    });  
    if ($("#optradio2").is(":checked")) {
        $("#paquet").show();
        $("#document").hide();
    } else {
        $("#paquet").hide();
        //$("#document").show();
    }
}

//valida numeros reales
function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla === 8) {
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron = /^[0-9]*\,?[0-9]*$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function OcultForm2() {
    $("#valorAsergurado").hide();
    $("#insurance-currency-label-doc").hide();
    $("#insurance-info-link-doc").hide();
    $("#asegurar").click(function () {
        if ($(this).is(":checked")) {
            $("#valorAsergurado").show();
            $("#insurance-currency-label-doc").show();
            $("#insurance-info-link-doc").show();
        } else {
            $("#valorAsergurado").hide();
            $("#insurance-currency-label-doc").hide();
            $("#insurance-info-link-doc").hide();
        }
    });
}
function OcultForm3() {
    $("#valorAserguradoPaquete").hide();
    $("#insurance-currency-label-docPaquete").hide();
    $("#insurance-info-link-paq").hide();
    $("#asegurarPaquete").click(function () {
        if ($(this).is(":checked")) {
            $("#valorAserguradoPaquete").show();
            $("#insurance-currency-label-docPaquete").show();
            $("#insurance-info-link-paq").show();
            
        } else {
            $("#valorAserguradoPaquete").hide();
            $("#insurance-currency-label-docPaquete").hide();
            $("#insurance-info-link-paq").hide();
        }
    });
}

//function OcultInputTracking() {
//    $("#Rastrear").hide();
//    $("#click_rastrear").click(function () {
//        $("#ocultrastreo").hide();
//        $("#Rastrear").show();         
//    });
//    $("#tracking").click(function () {
//        $("#ocultrastreo").hide();
//        $("#Rastrear").show();
//    });
    
//}






//function validarFormulario() {    
    
//    //validarDocumento();
//    if ($("#paq_btn").is(":checked")) {
//        $('#weight').removeAttr('required');
//        if ($("#largo").val() == "" || $("#ancho").val() == "" || $("#alto").val() == "" || $("#peso").val() == "") {
//            $('#largo').prop('required', true);
//            $('#ancho').prop('required', true);
//            $('#alto').prop('required', true);
//            $('#peso').prop('required', true);
//            return false;
//        }        
//        if ($("#largo").val() != "" && $("#ancho").val() != "" && $("#alto").val() != "" && $("#peso").val() != "") {

//            return true;
//        }
//    }
    
//    //var txtOrigen = document.getElementById('quote_from').value;
//    //var txtDestino = document.getElementById('quote_to').value;    
//    var rbtEnvio = document.getElementsByName('optradio');

//    var banderaRBTN = false;    

//    //Test campo obligatorio
//    //if (txtOrigen == null || txtOrigen.length == 0 || /^\s+$/.test(txtOrigen)) {
//    //    alert('ERROR: Campo Origen vacío');
//    //    return false;
//    //}

//    //if (txtDestino == null || txtDestino.length == 0 || /^\s+$/.test(txtDestino)) {
//    //    alert('ERROR: Campo Destino vacío');
//    //    return false;
//    //}

//    ////Test edad
//    //if (txtEdad == null || txtEdad.length == 0 || isNaN(txtEdad)) {
//    //    alert('ERROR: Debe ingresar una edad');
//    //    return false;
//    //}

//    ////Test correo
//    //if (!(/\S+@\S+\.\S+/.test(txtCorreo))) {
//    //    alert('ERROR: Debe escribir un correo válido');
//    //    return false;
//    //}

//    ////Test fecha
//    //if (!isNaN(txtFecha)) {
//    //    alert('ERROR: Debe elegir una fecha');
//    //    return false;
//    //}

//    ////Test comboBox
//    //if (cmbSelector == null || cmbSelector == 0) {
//    //    alert('ERROR: Debe seleccionar una opcion del combo box');
//    //    return false;
//    //}

//    ////Test checkBox
//    //if (!chkEstado.checked) {
//    //    alert('ERROR: Debe seleccionar el checkbox');
//    //    return false;
//    //}

//    //Test RadioButtons
//    for (var i = 0; i < rbtEnvio.length; i++) {
//        if (rbtEnvio[i].checked) {
//            banderaRBTN = true;
//            break;
//        }
//    }
//    if (!banderaRBTN) {
//        //oninvalid = this.setCustomValidity('Por favor ingrese un nombre');        
//        alert('ERROR: Debe elegir una opción de envio');
//        return false;
//    }

//    return true;

   
//}

