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
                                <p>Air Isolation Management - AIM for Performance</p>
                                <p><a class="btn btn-lg btn-primary" href="/directory/index.php">Learn more</a></p>
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
                              <i class="fa fa-circle text-primary fa-stack-2x"></i>
                              <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Energy Performance</h2>
                        <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is a new economical innovation designed to help provide a solution to the increased energy efficiency demands required in new home construction.</p>
                        <p><a class="btn btn-default" href="#performance" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4"> <span class="fa-stack fa-5x">
                              <i class="fa fa-circle text-primary fa-stack-2x"></i>
                              <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Builders</h2>
                        <p>Today's builders are struggling to meet production demands with a limited skilled-labor pool while simultaneously trying to meet new energy code mandates. The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> can help solve both problems!</p>
                        <p><a class="btn btn-default" href="#builders" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4"> <span class="fa-stack fa-5x">
                              <i class="fa fa-circle text-primary fa-stack-2x"></i>
                              <i class="fa fa-info fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Specifications and Testimonials</h2>
                        <p>"...it appears that the AccuFrame product can provide much of the air leakage control needed for homebuilders using it in their homes to meet the tough new Air Leakage requirements of the ECCCNYS-2016."
                            <br><b>Michael DeWein, Strategic Program Director, Leidos</b>
                      </p>
                        <p><a class="btn btn-default" href="#specs" role="button">View details &raquo;</a></p>
                    </div>
                </div>
                <!-- /.row -->
                <!-- START THE FEATURETTES -->
                <hr class="featurette-divider" id="performance">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="font-size: 50px;">Energy Performance</h2>
                        <p class="lead"><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is an onsite solution that mitigates air leakage by incorporating a framing gasket into exterior walls resulting in 4-way sealing of lineal gaps that has been shown to reduce air infiltration by more than 75% (ASTM E283).

As of early 2017, nine states (with others to follow soon) require compliance with the IECC 2015 new-housing air leakage standards. This requires that all new homes, when tested at a 50 Pa pressure differential, 'shall not exceed' 5 air changes/hour (ACH) in US climate zones 1 and 2 (warmer areas) and 3 ACH in the remaining cooler zones 3-8. Homes meeting the requirements will receive a “Certificate of Occupancy” which will be necessary for sale of the structure. Because the building must be largely completed before the testing can be performed, builders get one shot at achieving the air leakage standards, if the building doesn’t pass, costly rework and retesting  must be done to insure compliance with code. Rework and retesting can be prohibitively expensive, each test alone can cost up to $500 – nearly twice the average cost per home of <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i>!</p>
                        <a href="performance/index.php" class="btn btn-lg btn-primary">Learn more</a>
                        <br>
                    </div>
                    </div>
                    <br>
                    <div class="row" style="padding-top: 4%; padding-left: 15%">
                        <div class="col-md-4">
                            <img class="featurette-image img-responsive center-block img-thumbnail" src="/media/img/ryan.jpg">
                        </div>
                        <div class="col-md-7">
                            <blockquote class="blockquote">
                                <p class="lead">Your product offers a solution to a critical air sealing step for all builders. Its benefits are realized almost immediately- through lower heating and cooling costs and even more importantly, a more comfortable home for its occupants.</p>
                                <footer>Ryan McCoon at <cite title="Source Title"><a href="http://www.endurahomes.com/" target="_blank">Endura Homes</a></cite></footer>
                            </blockquote>
                        </div>
                    </div>
                <hr class="featurette-divider" id="builders">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 style="font-size: 50px;">Builders</h2>
                        <p class="lead"><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> helps solve two problems at once! <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> method
                        allows builders to optimize scarce framing labor by providing workers with a template for stud placement
                        that also serves as an air isolation gasket once it's in place. By preprinting framing stud locations on a
                        pliable gasket substrate that attaches to the wall plates, workers can quickly place and nail the studs to
                        the plates, integrating the gasket into the frame (video link). When the exterior sheathing is attached to
                        the completed wall frame, the AccuFrame gasket, which runs the length of the wall plate, is compressed
                        between the plate and the sheathing, automatically forming another air-flow barrier. This 4-way sealing
                        reduces air intrusion by more than 75% (ASTM E283).</p>
                        <p><a class="btn btn-lg btn-primary" href="/builders/index.php">Learn more</a></p>
                    </div>
                    <div class="col-md-5" style="padding-top: 10%;"><img class="featurette-image img-responsive img-thumbnail center-block" src="/media/img/zoom.jpg" alt="Generic placeholder image"> </div>
                </div>
                <hr class="featurette-divider" id="specs">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Specifications and Whole House Testing</h2>
                        <p class="lead"><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is a relatively new product but has undergone a substantial amount of testing in both engineering laboratories and recently in a whole house test. Results have been impressive in state agency architectural testing labs and in actual whole house construction testing.</p>
                        <p><a class="btn btn-lg btn-primary" href="/specs/index.php">Learn more</a></p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-responsive img-thumbnail center-block" src="/media/img/home.jpg" alt="Home construction image">
                        <br><i style="font-size: 19px;">Habitat for Humanity test home. AccuFrame in action!</i>
                    </div>
                </div>
                <hr class="featurette-divider">

                <footer>
                    <?php include("includes/footer.php"); ?>
                </footer>
            </div>
    </body>

    </html>
