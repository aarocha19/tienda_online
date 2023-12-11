<?php


//Configuración del sistema
define("SITE_URL", "http://tiendaonline13-info.preview-domain.com/");
define("KEY_TOKEN", "TU_TOKEN");
define("MONEDA", "$");

//Configuración para Paypal
define("CLIENT_ID", "AYB2v4rg_0sb-DQw98ML1gW_ut2y_IGLfsz4NP0N0hEoX71CxC43GjruUu2_NBEQOW93jjuDjNQNikjY");
define("CURRENCY", "MXN");

//Configuración para Mercado Pago
define("TOKEN_MP", "TEST-5957928576388086-120221-4eedaf5b4728cfead2441d8d9d684b1e-220554236");
define("PUBLIC_KEY_MP", "TEST-aa9aec22-dc94-4929-bf64-2d5bda3413c9");
define("LOCALE_MP", "es-MX");


//Datos para envio de correo electronico
define("MAIL_HOST", "smtp.hostinger.com");
define("MAIL_USER", "aa.rocha19@tiendaonline13.info");
define("MAIL_PASS", "Osc@ryair09");
define("MAIL_PORT", "587");

session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}
