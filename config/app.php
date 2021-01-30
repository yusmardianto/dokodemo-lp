<?php
    return [
        // -- email configuration --
        "email" => [
            'auth' => true,
            "secure" => 'tls',
            "host" => "smtp.mailtrap.io",
            "port" => 2525,
            "username" => "5cacef86d45cf4",
            "password" => "416a563d057d48",
            'debug' => 2,
            //default inquiry email
            "inquiry_email" => "sales@dokodemo-kerja.com",
            "trial_email" => "sales@dokodemo-kerja.com",
             // -- set it false to use mailtrap
            "sendmail" => false,
        ],
        
        // -- captcha --
        'site_key' => ($_SERVER['HTTP_HOST'] == 'dokodemo-kerja.com') ? '6Lcou10UAAAAAGM-POIo4qYEMQ25KoSDVf5rEIES' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
        'secret_key' => ($_SERVER['HTTP_HOST'] == 'dokodemo-kerja.com') ? '6Lcou10UAAAAAGS0iS4F-hBpLxgfyPV5J9AGED5N' : '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',

    ];
?>
