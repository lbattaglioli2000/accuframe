<?php
    session_start();
    $_SESSION["currentPage"] = "home";
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
        <title>AccuFrame&reg; Energy Seal</title>
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
        <?php include("includes/nav.php"); ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"> <img class="first-slide" src="/media/img/2015-10-15 11.37.58.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>AccuFrame<sup><small style="color: white;">&reg;</small></sup> Energy Seal</h1>
                                <p>Want more information on our product, AccuFrame<sup><small style="color: white;">&reg;</small></sup> Energy Seal?</p>
                                <p><a class="btn btn-lg btn-primary" href="#" data-toggle="popover" data-title="Heads up!" data-content="This link doesn't go anywhere yet! This site is still being developed! Stay tuned for more information!" data-placement="top" tabindex="0" data-trigger="focus">Learn more</a></p>
                                <script>
                                    $(document).ready(function () {
                                        $('[data-toggle="popover"]').popover();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img class="second-slide" src="/media/img/IMG_20151102_141942.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>AccuFrame<sup><small style="color: white;">&reg;</small></sup> Energy Seal Video</h1>
                                <p>Looking for a video to explain the process of installation? Look no further!</p>
                                <p><a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Watch the video</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img class="third-slide" src="/media/img/IMG_20151102_150059.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Who uses AccuFrame<sup><small style="color: white;">&reg;</small></sup> Energy Seal?</h1>
                                <p>Learn about the various companies that use AccuFrame<sup><small style="color: white;">&reg;</small></sup> Energy Seal?</p>
                                <p><a class="btn btn-lg btn-primary" href="#" data-toggle="popover" title="Heads up!" data-content="This link doesn't go anywhere yet! This site is still being developed! Stay tuned for more information!" data-placement="top" tabindex="0" data-trigger="focus">Learn more</a></p>
                                <script>
                                    $(document).ready(function () {
                                        $('[data-toggle="popover"]').popover();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!-- /.carousel -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Video</h4> </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/202858160?portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4"> <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Energy Performance</h2>
                        <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is a new economical innovation designed to help provide a solution to the increased energy efficiency demands required in new home construction.</p>
                        <p><a class="btn btn-default" href="#performance" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4"> <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Builders</h2>
                        <p>replace me.</p>
                        <p><a class="btn btn-default" href="#builders" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4"> <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-info fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Specifications and Whole House Testing</h2>
                        <p>replace me.</p>
                        <p><a class="btn btn-default" href="#specs" role="button">View details &raquo;</a></p>
                    </div>
                </div>
                <!-- /.row -->
                <!-- START THE FEATURETTES -->
                <hr class="featurette-divider" id="performance">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="featurette-heading">Energy Performance</h2>
                        <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is an onsite solution that mitigates air leakage by incorporating a framing gasket into exterior walls resulting in 4-way sealing of lineal gaps that has been shown to reduce air infiltration by more than 75% (ASTM E283).  

As of early 2017, nine states (with others to follow soon) require compliance with the IECC 2015 new-housing air leakage standards. This requires that all new homes, when tested at a 50 Pa pressure differential, 'shall not exceed' 5 air changes/hour (ACH) in US climate zones 1 and 2 (warmer areas) and 3 ACH in the remaining cooler zones 3-8. Homes meeting the requirements will receive a “Certificate of Occupancy” which will be necessary for sale of the structure. Because the building must be largely completed before the testing can be performed, builders get one shot at achieving the air leakage standards, if the building doesn’t pass, costly rework and retesting  must be done to insure compliance with code. Rework and retesting can be prohibitively expensive, each test alone can cost up to $500 – nearly twice the average cost per home of <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i>!</p>
                        <a href="performance/index.php" class="btn btn-lg btn-primary">Learn more</a>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-7">
                                <blockquote class="pull-right">
                                    <p class="lead">Your product offers a solution to a critical air sealing step for all builders. Its benefits are realized almost immediately- through lower heating and cooling costs and even more importantly, a more comfortable home for its occupants.</p>
                                    <footer>Ryan McCoon at <cite title="Source Title">Endura Homes</cite></footer>
                                </blockquote>
                            </div>
                            <div class="col-md-4"> <img class="featurette-image img-responsive img-circle pull-right" src="/media/img/ryan.jpg"> </div>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider" id="builders">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Builders</h2>
                        <p class="lead">Explain, in depth, what this means. Go more in depth than the text above relating to builders.</p>
                        <a class="btn btn-lg btn-primary">Learn more</a>
                    </div>
                    <div class="col-md-5"><img class="featurette-image img-responsive img-thumbnail center-block" src="/media/img/home builder.jpg" alt="Generic placeholder image"> </div>
                </div>
                <hr class="featurette-divider" id="specs">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Specifications and Whole House Testing</h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                        <a class="btn btn-lg btn-primary">Learn more</a>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                </div>
                <hr class="featurette-divider">
                
                <footer>
                    <?php include("includes/footer.php"); ?>
                </footer>
            </div>
    </body>

    </html>