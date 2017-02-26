<?php
    session_start();
    $_SESSION["currentPage"] = "contact";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Contact Form</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet"> </head>
    <style type="text/css">
        .popover-title {
            color: #000000 !important;
            text-decoration-style: wavy;
            /*black color*/
        }
        
        .popover-content {
            color: #000000 !important;
            /*black color*/
        }
    </style>

    <body>
        <?php include("../../includes/nav.php"); ?>
            <div class="jumbotron">
                <div class="container">
                    <h1>Contact</h1> </div>
            </div>
<<<<<<< HEAD
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="well well-sm">
                                <form class="form-horizontal" method="post" action="bin/contact.php">
                                    <fieldset>
                                        <!-- Name input-->
                                        <div class="form-group">
                                            <input type="hidden" name="action" value="submit">
                                            <label class="col-md-3 control-label" for="name">Name</label>
                                            <div class="col-md-9">
                                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Email input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="email">E-mail</label>
                                            <div class="col-md-9">
                                                <input id="email" name="email" type="email" placeholder="Your email" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Phone nummber input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="email">Phone Number</label>
                                            <div class="col-md-9">
                                                <input id="phone" name="email" type="number" placeholder="Your phone number" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Message body -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="message">Message</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                            </div>
                                        </div>
                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
=======
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                            <form name="sentMessage" id="contactForm" novalidate="" action="bin/contact.php" method="post">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Full Name:</label>
                                        <input type="text" class="form-control" id="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Phone Number:</label>
                                        <input type="tel" class="form-control" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Email Address:</label>
                                        <input type="email" class="form-control" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Message:</label>
                                        <textarea rows="10" cols="100" class="form-control" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
>>>>>>> 80001fbe0bab8ec95e21e1380b7b6101e230445c
                        </div>
                    </div>
                </div>
                <hr>
                <footer>
                    <?php include("../../includes/footer.php"); ?>
                </footer>
            </div>
    </body>

    </html>
    <script>
        /*
          Jquery Validation using jqBootstrapValidation
           example is taken from jqBootstrapValidation docs
          */
        $(function () {
            $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
                preventSubmit: true
                , submitError: function ($form, event, errors) {
                    // something to have when submit produces an error ?
                    // Not decided if I need it yet
                }
                , submitSuccess: function ($form, event) {
                    event.preventDefault(); // prevent default submit behaviour
                    // get values from FORM
                    var name = $("input#name").val();
                    var phone = $("input#phone").val();
                    var email = $("input#email").val();
                    var message = $("textarea#message").val();
                    var firstName = name; // For Success/Failure Message
                    // Check for white space in name for Success/Fail message
                    if (firstName.indexOf(' ') >= 0) {
                        firstName = name.split(' ').slice(0, -1).join(' ');
                    }
                    $.ajax({
                        url: "./bin/contact_me.php"
                        , type: "POST"
                        , data: {
                            name: name
                            , phone: phone
                            , email: email
                            , message: message
                        }
                        , cache: false
                        , success: function () {
                            // Success message
                            $('#success').html("<div class='alert alert-success'>");
                            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                            $('#success > .alert-success').append("<strong>Your message has been sent. </strong>");
                            $('#success > .alert-success').append('</div>');
                            //clear all fields
                            $('#contactForm').trigger("reset");
                        }
                        , error: function () {
                            // Fail message
                            $('#success').html("<div class='alert alert-danger'>");
                            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
                            $('#success > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                            $('#success > .alert-danger').append('</div>');
                            //clear all fields
                            $('#contactForm').trigger("reset");
                        }
                    , })
                }
                , filter: function () {
                    return $(this).is(":visible");
                }
            , });
            $("a[data-toggle=\"tab\"]").click(function (e) {
                e.preventDefault();
                $(this).tab("show");
            });
        });
        /*When clicking on Full hide fail/success boxes */
        $('#name').focus(function () {
            $('#success').html('');
        });
    </script>
