function validar() {
    validacion =true
    var nom, apP,apM, email, password,form;
    var express = /^[\w.-]+@[\w.-]+\.[a-z]+$/; // Expresión regular para validar el correo electrónico
    const nomApeExp = /^[A-Za-zÀ-ÖØ-öø-ÿ\s']+$/; // Expresión regular para validar nombre y apellido
    
    // Obtiene los valores de los campos del formulario
    nom = document.getElementById("Nombre").value;
    apP = document.getElementById("ApellidoPaterno").value;
    apM = document.getElementById("ApellidoMaterno").value;
    email = document.getElementById("Correo").value;
    password = document.getElementById("Contraseña").value;

    // Validación del campo "nombre"
    if (nom === "") {
        alert("Ingresa el nombre");
        return  validacion = false;
    } else if (nom.length > 30) {
        alert("El nombre solo puede tener hasta 30 caracteres");
        return  validacion = false;
    } else if (!nomApeExp.test(nom)) {
        alert("El nombre solo acepta caracteres válidos");
        return  validacion = false;
    }

    // Validación del campo "apellido"
    if (apP === "") {
        alert("Ingresa el apellido paterno");
        return validacion = false;
    } else if (apP.length > 30) {
        alert("El apellido paterno solo puede tener hasta 30 caracteres");
        return validacion = false;
    } else if (!nomApeExp.test(apP)) {
        alert("El apellido paterno solo acepta caracteres válidos");
        return validacion = false;
    }

    if (apM === "") {
        alert("Ingresa el apellido materno");
        return validacion = false;
    } else if (apM.length > 30) {
        alert("El apellido materno solo puede tener hasta 30 caracteres");
        return validacion = false;
    } else if (!nomApeExp.test(apM)) {
        alert("El apellido materno solo acepta caracteres válidos");
        return validacion = false;
    }

    // Validación del campo "email"
    if (email === "") {
        alert("Ingresa un email");
        return validacion = false;
    }else if (!express.test(email)){
        alert("Email invalido");
        return validacion = false;

    }

    // Validación del campo "contraseña"
    if (password === "") {
        alert("La contraseña no puede estar vacía");
        return false;
    } else if (password.length < 8) {
        alert("La contraseña debe tener al menos 8 caracteres");
        return false;
    } else if (password.length > 20) {
        alert("La contraseña no puede tener más de 20 caracteres");
        return false;
    } else if (!/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])/.test(password)) {
        alert("La contraseña no cumple con los requisitos de seguridad (debe incluir al menos una mayúscula, una minúscula, un número y un carácter especial)");
        return false;
    }



    return validacion

}
