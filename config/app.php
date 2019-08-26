<?php
    return [
        // -- email configuration --
        "email" => [
            'auth' => true,
            "secure" => 'tls',
            "host" => "smtp.mailtrap.io",
            "port" => 25,
            "username" => "60d9b1e1c6dbe6",
            "password" => "b42f6787a1f5d5",
            'debug' => 2,
            //default inquiry email 
            "inquiry_email" => "info@hajime-indonesia.co.id",
            "trial_email" => "info@hajime-indonesia.co.id",
             // -- set it false to use mailtrap
            "sendmail" => false,
        ],

        // -- captcha --
        'site_key' => '',
        'secret_key' => '',

    ];
?>
