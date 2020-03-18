<?php include 'head.php'; ?>

        <!-- masthead end -->

        <!--Page Header-->
        <div class="page-header title-area">
            <div class="header-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1 class="page-title">Contact Us</h1> </div>
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
                                <span>Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header end-->

        <!--contact pagesec-->
        <section class="contactpagesec secpadd">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="fh-section-title clearfix f25 text-left version-dark paddbtm40">
                            <h2>Contact Details</h2>
                        </div>
                        <p class="margbtm30">If you have any questions about what we offer for consumers or for business, you can always email us or call us via the below details. We’ll reply within 24 hours.</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="fh-contact-box type-address "><i class="flaticon-pin"></i>
                                    <h4 class="box-title">Visit our office</h4>
                                    <div class="desc">
                                        <p>10296, Smart Delivery Services, Virginia,  United States – 90005 </p>
                                    </div>
                                </div>
                                <div class="fh-contact-box type-email "><i class="flaticon-business"></i>
                                    <h4 class="box-title">Mail Us at</h4>
                                    <div class="desc">
                                        <p>contact@smartsdeliveryservices.com
                                            <br> contact@smartsdeliveryservices.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="fh-contact-box type-phone "><i class="flaticon-phone-call "></i>
                                    <h4 class="box-title">Call us on</h4>
                                    <div class="desc">
                                        <p>Office: +19705100660 &amp; ++19705100660
                                            <br> Customer Care: +19705100660</p>
                                    </div>
                                </div>
                                <div class="fh-contact-box type-social "><i class="flaticon-share"></i>
                                    <h4 class="box-title">We are social</h4>
                                    <ul class="clearfix">
                                        <li class="facebook">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="googleplus">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="opening-hours vc_opening-hours">
                            <h3>WORKING HOURS</h3>
                            <p>Pleasure and praising pain was born and will give you a complete happiness.</p>
                            <ul>
                                <li>Monday <span class="hour">9:00 am – 17.00 pm</span></li>
                                <li>Tuesday<span class="hour">9:00 am – 18.00 pm</span></li>
                                <li>Wednesday <span class="hour">9:00 am – 18.00 pm</span></li>
                                <li>Thurs &amp; Friday<span class="hour">10:00 am – 16.00 pm</span></li>
                                <li>Sat &amp; Sunday <span class="hour main-color">Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact end-->

        <!--contact form -->
        <section class="contactpagform graybg secpadd">
            <div class="container">
                <div class="fh-section-title clearfix f25 text-center version-dark paddbtm40">
                    <h2>Leave Your Message</h2>
                </div>
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
        $mail->Subject = 'message from smart delivery services contact page';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['email']}
Phone number: {$_POST['phone']}
Message: {$_POST['message']}
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

             ?> 
                <p class="paddbtm40 text-center">If you have any questions about the services we provide simply use the form below. We try and respond to all
                    <br>queries and comments within 24 hours.</p>
                <form method="post">
                    <?php if (!empty($msg)) {
    echo "<script>alert('Message Successfully Send, you will receive a reply from us shortly')</script>";
} ?>
                    <div class="fh-form fh-form-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p class="field">
                                    <input  name="name" placeholder="Your Name*" type="text">
                                </p>
                                <p class="field">
                                    <input name="email" placeholder="Email Address*" type="email">
                                </p>
                                <p class="field">
                                    <input name="phone" placeholder="Phone" type="text">
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <p class="field single-field">
                                    <textarea  name="message" cols="40" rows="10" placeholder="Your Message..."></textarea>
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p class="field submit">
                                    <button  class="fh-btn" name="submit" type="submit">Submit</button>
								</p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
       <?php include 'footer.php'; ?>