<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Ad9PlnZZVLR8oHpCSyit4ScipwqOd2hG9aKMoa9RkJgXq8Dfet_3P7pxAdmJVm5TFJNCThXT34SnGTrg',     // ClientID
        'EAsYgsBDSagNP38kuLFZy1Y42eTGgS-OUEsHaV1faqFsPrkJ3MPL1i4VG72bTY6OQAOdmG7N7Ngak97H'      // ClientSecret
    )
);
?>