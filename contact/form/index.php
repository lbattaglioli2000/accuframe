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
            <?php
                            $action=$_REQUEST['action'];
                            if ($action == ""){
                        ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="well well-sm">
                                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <!-- Name input-->
                                        <div class="form-group">
                                            <input type="hidden" name="action" value="submit">
                                            <label class="col-md-3 control-label" for="name">Name</label>
                                            <div class="col-md-9">
                                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control"> </div>
                                        </div>
                                        <!-- Email input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                            <div class="col-md-9">
                                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control"> </div>
                                        </div>
                                        <!-- Message body -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="message">Your message</label>
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
                        <?php
                            }else{
                            $name = $_REQUEST['name'];
                            $email = $_REQUEST['email'];
                            $message = $_REQUEST['message'];
                            if (($name=="")||($email=="")||($message==""))
                                {
                                echo "<div class='alert alert-danger'><b>Oh noes!</b> All fields are required, please fill <a href=\"\">the form</a> again.</div>";
                                }
                            else{		
                                $from="From: $name<$email>\r\nReturn-path: $email";
                                $subject="New Message via your contact form";
                                mail("webmaster@accuframe.com", $subject, $message, $from);
                                echo "<div class='alert alert-success'>Message sent! Click <a href='/index.php'>here</a> to go back home!</div>";
                                }
                            }  
                        ?> </div>
                </div>
                <footer>
                    <?php include("/includes/footer.php"); ?>
                </footer>
    </body>

    </html>