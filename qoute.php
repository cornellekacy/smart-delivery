<?php include 'head.php'; ?>

        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Request A Quote</h1> </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 site-breadcrumb">
                            <nav class="breadcrumb">
                                <a class="home" href="#"><span>Home</span></a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span>Request A Quote</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--Request a Quote -->
        <section class="whychoose-1 secpadd">
            <div class="container">
                <div class="row quote1top">
                                                                                                                                             <?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
 $mail = new PHPMailer;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
     //$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
$mail->SMTPSecure = 'tls';
$mail->Host = 'premium42.web-hosting.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "contact@smartsdeliveryservices.com";
//Password to use for SMTP authentication
$mail->Password = "Jj&hHFB^6r4n";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('contact@smartsdeliveryservices.com', 'Qoute page');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('contact@smartsdeliveryservices.com', 'contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'message from smart delivery services Qoutes Page';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
First Name: {$_POST['fname']}
Last Name: {$_POST['lname']}
Email: {$_POST['email']}
departure City: {$_POST['pcity']}
Delivery City: {$_POST['dcity']}
Parcel type: {$_POST['ptype']}
Parcel Weight: {$_POST['weight']}
Message: {$_POST['message']}
Freight Type: {$_POST['trans']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}

             ?>    <div class="col-md-8">
                        <div class="fh-section-title clearfix  text-left version-dark paddbtm40">
                            <h2>Request a Quote</h2>
                        </div>
                        <p>We’re always interested in new projects, big or small. Send us an email and we’ll get in touch shortly, or phone between 8:00 am and 7:00 pm Monday to Saturday.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/resources/cargocar.png" alt="">
                    </div>
                </div>
                <div class="row quote1forms">
                    <div class="col-md-12">
                        <form method="post">
                            <?php if (!empty($msg)) {
    echo "<script>alert('Qoute Successfully Send, you will receive a reply from us shortly')</script>";
} ?>
                            <div class="fh-form request-form">
                                <div class="row">
                                    <div class="field col-md-4">
                                        <label>First Name<span class="require">*</span></label>
                                        <input placeholder="First Name" name="fname" type="text">
                                    </div>
                                    <div class="field col-md-4">
                                        <label>Last Name<span class="require">*</span></label>
                                        <input placeholder="Last Name" name="lname" type="text">
                                    </div>
                                    <div class="field col-md-4">
                                        <label>Email Address<span class="require">*</span></label>
                                        <input name="email"  placeholder="Email Address" type="email">
                                    </div>
                                    <div class="col-md-8 request-row">
                                        <p class="field first-row">
                                            <label>City Departure</label>
                                            <input type="text" name="pcity">
                                        </p>
                                        <p class="field last-row">
                                            <label>Delivery City</label>
                                            <input type="text" name="dcity">
                                        </p>
                                        <p class="field first-row">
                                            <label>Parcel Type</label>
                                          <input type="text" name="ptype">
                                        </p>
                                        <p class="field last-row">
                                            <label>Weight(kg)</label>
                                            <input type="text" name="weight">
                                        </p>
                                        <p class="field single-field">
                                            <label>Special Info</label>
                                            <textarea name="message"></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="field check-box">
                                            <label>Freight Type<span class="require">*</span></label>
                                            <select name="trans">
                                                <option value="Road Transportation">Road Transportation</option>
                                                <option value="Air Transportation">Air Transportation</option>
                                                <option value="See Transportation">See Transportation</option>
                                                <option value="Rail Transportation">Rail Transportation</option>
                                            </select>
                                        </p>
                                        <p class="field submit">
                                            <input value="Submit" name="submit" class="fh-btn" type="submit">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
     <?php include 'footer.php'; ?>