<?php  
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
 
    $message = "";
    $subject = null;
    $errors = array();
    $success = null;
    if ($_POST) {
        /* handle error fields */
            $required_fields['name']        = 'You are required to enter your name.';
            $required_fields['company']     = 'You are required to enter your company name.';
            $required_fields['start_time']  = 'You are required to enter start time meeting.';
            $required_fields['end_time']    = 'You are required to enter end time meeting.';
            $required_fields['email']       = 'You are required to enter email.';
            $required_fields['phone']       = 'You are required to enter phone number.';
            $required_fields['department']  = 'You are required to enter department.';
            $required_fields['message']     = 'You are required to enter message.';

            // Check for a valid phone number
            if (isset($_POST['phone'])) {
              $phone_number = $_POST['phone'];
              $pattern = "/^[0-9\_]{7,20}/";
              if (!preg_match($pattern,$phone_number)) { 
                $errors[] = 'Phone number formatted incorrectly';
              }
            }

            // Check for a valid email
            if (isset($_POST['email'])) {
              $pattern_email = '/^[_a-zA-Z0-9-+]+(\.[_a-zA-Z0-9-+]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/';
              $email = $_POST['email'];
              if (!preg_match($pattern_email,$email)) { 
                $errors[] = 'Email formatted incorrectly';
              }
            }

            foreach($_POST as $key => $value) {
                if( array_key_exists($key, $required_fields)) {
                    if (trim($_POST[$key]) === '') {
                      $errors[$key] = $required_fields[$key];
                    }
                }
            }

            foreach($_POST as $key => $value) {
                if(array_key_exists($key, $required_fields)) {
                    if (trim($_POST[$key]) === '') {
                    $errors[$key] = $required_fields[$key];
                    }
                }
            }
        
            $captcha = $_POST['g-recaptcha-response'];
            $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$config["secret_key"].'&response='.$_POST['g-recaptcha-response']);
            $response = json_decode($verify);

            if (!$response->success) {
              $errors[] = 'Recaptcha incorect.! please try again';
            }

        if (empty($errors)) {
            $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $company_field  = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
            $message_field  = htmlspecialchars($_POST['message']);
            $meeting_type   =  htmlspecialchars(strtoupper($_POST['meeting_type']));
            $start_time     = date("H:i", strtotime($_POST['start_time']));
            $end_time       = date("H:i", strtotime($_POST['end_time']));
            $email          = $_POST['email'];
            $phone_number   = $_POST['phone'];
            $department     = htmlspecialchars($_POST['department']);

            $body = '<!doctype html>
            <html>
              <head>
                <meta name="viewport" content="width=device-width" />
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>Dokodemo Email</title>
                <style>
                  /* -------------------------------------
                      GLOBAL RESETS
                  ------------------------------------- */
                  
                  /*All the styling goes here*/
                  
                  img {
                    border: none;
                    -ms-interpolation-mode: bicubic;
                    max-width: 100%; 
                  }
                  body {
                    background-color: #f6f6f6;
                    font-family: sans-serif;
                    -webkit-font-smoothing: antialiased;
                    font-size: 16px;
                    line-height: 1.4;
                    margin: 0;
                    padding: 0;
                    -ms-text-size-adjust: 100%;
                    -webkit-text-size-adjust: 100%; 
                  }
                  table {
                    border-collapse: separate;
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                    width: 100%; }
                    table td {
                      font-family: sans-serif;
                      font-size: 16px;
                      vertical-align: top; 
                  }
                  /* -------------------------------------
                      BODY & CONTAINER
                  ------------------------------------- */
                  .body {
                    background-color: #f6f6f6;
                    width: 100%; 
                  }
                  /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
                  .container {
                    display: block;
                    margin: 0 auto !important;
                    /* makes it centered */
                    max-width: 580px;
                    padding: 10px;
                    width: 580px; 
                  }
                  /* This should also be a block element, so that it will fill 100% of the .container */
                  .content {
                    box-sizing: border-box;
                    display: block;
                    margin: 0 auto;
                    max-width: 580px;
                    padding: 10px; 
                  }
                  /* -------------------------------------
                      HEADER, FOOTER, MAIN
                  ------------------------------------- */
                  .main {
                    background: #ffffff;
                    border-radius: 3px;
                    width: 100%; 
                  }
                  .wrapper {
                    box-sizing: border-box;
                    padding: 20px; 
                  }
                  .content-block {
                    padding-bottom: 10px;
                    padding-top: 10px;
                  }
                  .footer {
                    clear: both;
                    margin-top: 10px;
                    text-align: center;
                    width: 100%; 
                  }
                    .footer td,
                    .footer p,
                    .footer span,
                    .footer a {
                      color: #999999;
                      font-size: 14px;
                      text-align: center; 
                  }
                  /* -------------------------------------
                      TYPOGRAPHY
                  ------------------------------------- */
                  h1,
                  h2,
                  h3,
                  h4 {
                    color: #000000;
                    font-family: sans-serif;
                    font-weight: 400;
                    line-height: 1.4;
                    margin: 0;
                    margin-bottom: 30px; 
                  }
                  h1 {
                    font-size: 37px;
                    font-weight: 300;
                    text-align: center;
                    text-transform: capitalize; 
                  }
                  p,
                  ul,
                  ol {
                    font-family: sans-serif;
                    font-size: 16px;
                    font-weight: normal;
                    margin: 0;
                    margin-bottom: 15px; 
                  }
                    p li,
                    ul li,
                    ol li {
                      list-style-position: inside;
                      margin-left: 5px; 
                  }
                  a {
                    color: #3498db;
                    text-decoration: underline; 
                  }
                  /* -------------------------------------
                      BUTTONS
                  ------------------------------------- */
                  .btn {
                    box-sizing: border-box;
                    width: 100%; }
                    .btn > tbody > tr > td {
                      padding-bottom: 15px; }
                    .btn table {
                      width: auto; 
                  }
                    .btn table td {
                      background-color: #ffffff;
                      border-radius: 5px;
                      text-align: center; 
                  }
                    .btn a {
                      background-color: #ffffff;
                      border: solid 1px #3498db;
                      border-radius: 5px;
                      box-sizing: border-box;
                      color: #3498db;
                      cursor: pointer;
                      display: inline-block;
                      font-size: 16px;
                      font-weight: bold;
                      margin: 0;
                      padding: 12px 25px;
                      text-decoration: none;
                      text-transform: capitalize; 
                  }
                  .btn-primary table td {
                    background-color: #3498db; 
                  }
                  .btn-primary a {
                    background-color: #3498db;
                    border-color: #3498db;
                    color: #ffffff; 
                  }
                  /* -------------------------------------
                      OTHER STYLES THAT MIGHT BE USEFUL
                  ------------------------------------- */
                  .last {
                    margin-bottom: 0; 
                  }
                  .first {
                    margin-top: 0; 
                  }
                  .align-center {
                    text-align: center; 
                  }
                  .align-right {
                    text-align: right; 
                  }
                  .align-left {
                    text-align: left; 
                  }
                  .clear {
                    clear: both; 
                  }
                  .mt0 {
                    margin-top: 0; 
                  }
                  .mb0 {
                    margin-bottom: 0; 
                  }
                  .preheader {
                    color: transparent;
                    display: none;
                    height: 0;
                    max-height: 0;
                    max-width: 0;
                    opacity: 0;
                    overflow: hidden;
                    mso-hide: all;
                    visibility: hidden;
                    width: 0; 
                  }
                  .powered-by a {
                    text-decoration: none; 
                  }
                  hr {
                    border: 0;
                    border-bottom: 1px solid #f6f6f6;
                    margin: 20px 0; 
                  }
                  /* -------------------------------------
                      RESPONSIVE AND MOBILE FRIENDLY STYLES
                  ------------------------------------- */
                  @media only screen and (max-width: 620px) {
                    table[class=body] h1 {
                      font-size: 30px !important;
                      margin-bottom: 10px !important; 
                    }
                    table[class=body] p,
                    table[class=body] ul,
                    table[class=body] ol,
                    table[class=body] td,
                    table[class=body] span,
                    table[class=body] a {
                      font-size: 18px !important; 
                    }
                    table[class=body] .wrapper,
                    table[class=body] .article {
                      padding: 10px !important; 
                    }
                    table[class=body] .content {
                      padding: 0 !important; 
                    }
                    table[class=body] .container {
                      padding: 0 !important;
                      width: 100% !important; 
                    }
                    table[class=body] .main {
                      border-left-width: 0 !important;
                      border-radius: 0 !important;
                      border-right-width: 0 !important; 
                    }
                    table[class=body] .btn table {
                      width: 100% !important; 
                    }
                    table[class=body] .btn a {
                      width: 100% !important; 
                    }
                    table[class=body] .img-responsive {
                      height: auto !important;
                      max-width: 100% !important;
                      width: auto !important; 
                    }
                  }
                  /* -------------------------------------
                      PRESERVE THESE STYLES IN THE HEAD
                  ------------------------------------- */
                  @media all {
                    .ExternalClass {
                      width: 100%; 
                    }
                    .ExternalClass,
                    .ExternalClass p,
                    .ExternalClass span,
                    .ExternalClass font,
                    .ExternalClass td,
                    .ExternalClass div {
                      line-height: 100%; 
                    }
                    .apple-link a {
                      color: inherit !important;
                      font-family: inherit !important;
                      font-size: inherit !important;
                      font-weight: inherit !important;
                      line-height: inherit !important;
                      text-decoration: none !important; 
                    }
                    #MessageViewBody a {
                      color: inherit;
                      text-decoration: none;
                      font-size: inherit;
                      font-family: inherit;
                      font-weight: inherit;
                      line-height: inherit;
                    }
                    .btn-primary table td:hover {
                      background-color: #34495e !important; 
                    }
                    .btn-primary a:hover {
                      background-color: #34495e !important;
                      border-color: #34495e !important; 
                    } 
                  }
                </style>
              </head>
              <body class="">
                <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
                  <tr>
                    <td>&nbsp;</td>
                    <td class="container">
                      <div class="content">
            
                        <!-- START CENTERED WHITE CONTAINER -->
                        <table role="presentation" class="main">
            
                          <!-- START MAIN CONTENT AREA -->
                          <tr>
                            <td class="wrapper">
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td>
                                    <p>Hi there, this is message from Dokodemo</p>
                                    <p>you have an inquiry email from :</p>
                                    <!--
                                    <p>you have an inquiry email from :</p>
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                      <tbody>
                                        <tr>
                                          <td align="left">
                                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                              <tbody>
                                                <tr>
                                                  <td> <a href="http://htmlemail.io" target="_blank">Call To Action</a> </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    -->

                                    <p>Name : '.$name_field.'</p>
                                    <p>Company : '.$company_field.'</p>
                                    <p>Email : '.$email.'</p>
                                    <p>Phone Number : '.$phone_number.'</p>
                                    <p>Department : '.$department.'</p>
                                    <p>Time Preferred : '.$start_time.' - '.$end_time.'</p>
                                    <hr>
                                    <h1>'.$meeting_type. ' MEETING</h1>
                                    <hr>
                                    <p>Message : <br>'.$message_field.'</p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
            
                        <!-- END MAIN CONTENT AREA -->
                        </table>
                        <!-- END CENTERED WHITE CONTAINER -->
            
                        <!-- START FOOTER -->
                        <div class="footer">
                          <table role="presentation" border="0" cellpadding="0" cellspacing="0">

                            <tr>
                              <td class="content-block powered-by">
                                Powered by <a href="#">PT LOGIQUE Digital Indonesia</a>.
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!-- END FOOTER -->
            
                      </div>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </body>
            </html>';

            try {
                //Server settings
                $mail = new PHPMailer();                                // create a new object
    
                if ($config['email']['sendmail'] == true) {
                    $mail->isSendmail();
                } else {
                    $mail->isSMTP();                                    // Set mailer to use SMTP
                    $mail->Host         = $config['email']['host'];     // Specify main and backup SMTP servers
                    $mail->SMTPAuth     = $config['email']['auth'];     // Enable SMTP authentication
                    // $mail->SMTPDebug    = $config['email']['debug']; // Enable verbose debug output
                    $mail->Username     = $config['email']['username']; // SMTP username
                    $mail->Password     = $config['email']['password']; // SMTP password
                    $mail->SMTPSecure   = $config['email']['secure'];   // Enable TLS encryption, `ssl` also accepted
                    $mail->Port         = $config['email']['port'];     // TCP port to connect to
                }
              
                $mail->setFrom($config['email']['inquiry_email']);      // Mail Form
                $mail->addAddress($config['email']['inquiry_email']);   // Name is optional
                $mail->isHTML(true);        
                $mail->CharSet   = "UTF-8";
                $mail->Subject = $meeting_type. ' MEETING DOKODEMO';
                $mail->Body    = $body;
                $mail->AltBody = date('Y').'. All rights reserved.';
                // $mail->addReplyTo($email_field, $name_field);
                $mail->send();

                $success = 'Message has been sent';
                
            } catch (Exception $e) {
                $errors[] =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
          
        }
    }

?>