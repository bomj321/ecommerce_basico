<?php

//url aquispe
//define('URL_SITIO', '');
require 'autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AdvVtorYR0RUOKO6roNDMOuDk9GRz9p96RWgdNoUefMJUPd3XgnLyyt6KVvwbD8wM2uXhfkDcqOOX6kw',     // ClientID
        'EP5hscVEHsXLE7hdeuUiW36GEUIihrtTAyDRNqPyc9ed72OsqEO0NnHbLrp4RGiVCHWMHQn0rxqsm0IQ'      // ClientSecret
    )
);
 ?>
