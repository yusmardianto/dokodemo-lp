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
            "inquiry_email" => "sales@dokodemo-kerja.com",
            "trial_email" => "sales@dokodemo-kerja.com",
             // -- set it false to use mailtrap
            "sendmail" => false,
        ],
        
        // -- captcha --
        'site_key' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
        'secret_key' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',

    ];
?>
