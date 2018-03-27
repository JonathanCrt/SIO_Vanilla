/**
 * Created by Jonathan Crété on 02/18/18
 */

/*********  Regular expressions functions   *************/
function isNum(s) {
    return (!isNaN(s));
}
function isChiffres(s) {
    var regEx = new RegExp(/^([0-9]+)$/);
    return (regEx.test(s));
}

function isAlpha(s) {
    var regEx = new RegExp(/^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._ -]*)$/);

    return (regEx.test(s));
}

function isAlphaNumWithoutSpace(h) {
    var regEx = new RegExp(/^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._-\d]{3,30})$/);

    return (regEx.test(h));
}


function isAlphaNum(s) {
    var regEx = new RegExp(/^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._ -\d]{3,30})$/);

    return (regEx.test(s));
}


function isCodePostal(s){
    var regEx = new RegExp(/^([0-9]+){5,5}$/);
    return (regEx.test(s));
}


function isPhone(s){
    var regEx = new RegExp(/^([0-9]+){10,10}$/);
    return (regEx.test(s));
}


function isEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}