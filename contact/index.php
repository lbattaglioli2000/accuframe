<?php
    session_start();
    $_SESSION["currentPage"] = "contact";
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Contact Us</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Take our 10 second survey to help improve our product.">
        <meta name="author" content="Michael Schettine at AccuFrame">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css"> </head>

    <body>
        <?php include('../includes/nav.php'); ?>
            <div class="jumbotron">
                <div class="container" style="padding-top: 5%;">
                    <h1>Contact us</h1> </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Send us a Message</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Phone Number:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number."> </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address."> </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Message:</label>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h2>Contact Details</h2>
                        <p>POB 429 Delanson,
                            <br>New York 12053</p>
                        <p><i class="fa fa-phone"></i><abbr title="Phone">P</abbr>: (518)-852-1736</p>
                        <p><i class="fa fa-envelope-o"></i><abbr title="Email">E</abbr>: <a href="mailto:michael@accuframe.com">michael@accuframe.com</a></p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li> <a href="#" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
                            <li> <a href="https://www.linkedin.com/in/mschettine" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a> </li>
                            <li> <a href="#" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a> </li>
                            <li> <a href="#" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <footer>
                    <hr>
                    <?php include('../includes/footer.php'); ?>
                </footer>
            </div>
            <!-- jQuery -->
            <script src="js/jquery.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Contact Form JavaScript -->
            <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>
    </body>

    </html>