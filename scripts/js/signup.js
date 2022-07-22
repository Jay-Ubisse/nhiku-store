$(document).ready(function () {
    $("#signup").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                rangelength: [8,15]
            },
            confirmpassword: {
                equalTo: "#password"
            },
            address1: {
                required: true
            },
            city: {
                required: true
            },
            province: {
                required: true
            },
            phone: {
                required: true,
                number: true,
                rangelength: [8,8]
            },
        },
        messages: {
            name: {
                required: "Introduza o seu nome"
            },
            email: {
                required: "Introduza o seu email",
                email: "Email inválido"
            },
            password: {
                required: "Introduza a palavra-passe",
                rangelength: "A palavra-passe deve ter de 8 à 15 caracteres"
            },
            confirmpassword: {
                equalTo: "Introduza a mesma palavra-passe que a anterior"
            },
            address1: {
                required: "Introduza o seu endereco"
            },
            city: {
                required: "Informe-nos a sua cidade"
            },
            province: {
                required: "Informe-nos a sua provincia"
            },
            phone: {
                required: "Introduza o seu numero de celular",
                rangelength: "O seu numero de celular deve ter 8 digitos",
                number: "O numero de celular deve conter somente dgitos numericos"
            },
        }
    });
}); // end ready