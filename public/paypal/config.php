<?php

//url aquispe
//define('URL_SITIO', '');
require 'autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        '',     // ClientID
        ''      // ClientSecret
    )
);
 ?>
