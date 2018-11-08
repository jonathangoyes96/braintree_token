<?php
session_start();
require_once("lib/autoload.php");

if (file_exists(__DIR__ . "/../env")) {
    $dotevn = new Dotenv\Dotenv(__DIR__ . "/../");
    $dotevn->load();
}

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('499yvqtx6wqr78k8');
Braintree_Configuration::publicKey('jyk429ryd2kwqn59');
Braintree_Configuration::privateKey('4d40576457912e1f0430cae896b139a8');


?>