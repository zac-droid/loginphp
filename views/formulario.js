"use strict";

const inputs = document.getElementsById('usuario-data');


inputs.addEventListener("blur",
    function(event) {
        if (event.target.value === "") {
            alert("complete todos los campos del formulario");
        } else {
            alert("Gracias");
        }

    },
    false
)