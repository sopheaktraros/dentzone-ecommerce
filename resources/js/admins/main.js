/*
* The Vendor Script using to admin dashboard and add all customize script on this script files.
* */

/*-----Form Filter Submit Object-----*/
import Scrollbar from "smooth-scrollbar";

$.fn.formToObject = function (form) {
    const formData = form.serializeArray();
    let jsonObject = {};

    for (var i = 0; i < formData.length; i++) {
        jsonObject[formData[i].name] = formData[i].value;
    }

    return jsonObject;
};

/*------validation------*/
(function() {
    'use strict';
    window.addEventListener('load', function() {
        const forms = document.getElementsByClassName('needs-validation');
        const validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(document).ready(function (){
    Scrollbar.init(document.querySelector('.wrapper-menu'));
});


