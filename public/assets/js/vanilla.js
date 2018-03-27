

function checkNom(p) {
    if (!isAlphaNum($('#form_NomEntreprise').val(), true)) {
        return (false);
    } else return (true);
}


function checkVille(p) {
    if (!isAlphaNum($('#form_VilleEntreprise').val(), true)) {
        return (false);
    } else return (true);
}






/******                                 Keyup                               ********************/

$('#div_formNomPy').keyup(function () {
    if (!isAlphaNum($('#form_NomEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formNomPy").find('.smalltextvalid').hide();
        $("#div_formNomPy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formNomPy").find('.smalltexterror').hide();
        $("#div_formNomPy").find('.smalltextvalid').show();
    }
});


$('#div_formVillePy').keyup(function () {
    if (!isAlphaNum($('#form_VilleEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formVillePy").find('.smalltextvalid').hide();
        $("#div_formVillePy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formVillePy").find('.smalltexterror').hide();
        $("#div_formVillePy").find('.smalltextvalid').show();
    }
});


$('#div_formActivitePy').keyup(function () {
    if (!isAlphaNum($('#form_ActiviteEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formActivitePy").find('.smalltextvalid').hide();
        $("#div_formActivitePy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formActivitePy").find('.smalltexterror').hide();
        $("#div_formActivitePy").find('.smalltextvalid').show();
    }
});






$('#div_formCpPy').keyup(function () {
    if (!isCodePostal($('#form_CpEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formCpPy").find('.smalltextvalid').hide();
        $("#div_formCpPy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formCpPy").find('.smalltexterror').hide();
        $("#div_formCpPy").find('.smalltextvalid').show();
    }
});


$('#div_formAdressePy').keyup(function () {
    if (!isAlphaNum($('#form_AdressseEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formAdressePy").find('.smalltextvalid').hide();
        $("#div_formAdressePy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formAdressePy").find('.smalltexterror').hide();
        $("#div_formAdressePy").find('.smalltextvalid').show();
    }
});

$('#div_formTelPy').keyup(function () {
    if (!isPhone($('#form_TelEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formTelPy").find('.smalltextvalid').hide();
        $("#div_formTelPy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formTelPy").find('.smalltexterror').hide();
        $("#div_formTelPy").find('.smalltextvalid').show();
    }
});


$('#div_formMailPy').keyup(function () {
    if (!isEmail($('#form_MailEntreprise').val())) {
        $(this).addClass('has-danger').removeClass('has-success');
        $("#div_formMailPy").find('.smalltextvalid').hide();
        $("#div_formMailPy").find('.smalltexterror').show();
    } else {
        $(this).removeClass('has-danger').addClass('has-success');
        $("#div_formMailPy").find('.smalltexterror').hide();
        $("#div_formMailPy").find('.smalltextvalid').show();
    }
});






function initall(){
    $(".smalltexterror,.smalltextvalid").hide();


}


$(document).ready(function() {

    initall();

    var ch1 = !checkNom();
    // var ch2 =
    // var ch3 =
    // var ch4 =
    // var ch5 =
    // var ch6 =
    // var ch7 =




    $('#btnNext1').click(function(){
       if ($('div[id^="div_form"]').hasClass('has-danger')){
           alert('Des champs sont incorrect merci de vérifier ! ')
           return false ;
       }
    });





});



