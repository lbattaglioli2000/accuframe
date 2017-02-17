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
        <link href="css/main.css" rel="stylesheet"> 
    </head>
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
            <!-- Carousel
    ================================================== -->
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
                    <div class="col-lg-4"> 
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-exclamation fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Fewer Errors</h2>
                        <p>With <i>AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> you get unparalleled quality control and accuracy at the framing stage that is easily acquired by a labor force and doesn't require advanced carpentry skills.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Faster</h2>
                        <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> saves you time as well as money. Fifteen percent or more in reduced framing cycles translates to immediate return on investment, while adding greater accuracy and quality control accelerating your building success.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                        <h2>Energy Performance</h2>
                        <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> helps the environment by dictating energy efficient framing methods on-site, consequently, homeowners will decrease energy consumption throughout the life cycle of their home.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- START THE FEATURETTES -->
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Build with less errors. <span class="text-muted">Add something catchy here.</span></h2>
                        <p class="lead">Explain, in depth, what this means. Go more in depth than the text above relating to building with less errors</p>
                    </div>
                    <div class="col-md-5"> <img class="featurette-image img-responsive center-block" src="/media/img/home builder.jpg" alt="Generic placeholder image"> </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                        <h2 class="featurette-heading">Build faster.</h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 col-md-pull-7"> <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-5">
                        <h2 class="featurette-heading">And lastly, build with energy performance. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <blockquote class="pull-right">
                            <p>Your product offers a solution to a critical air sealing step for all builders. Its benefits are realized almost immediately- through lower heating and cooling costs and even more importantly, a more comfortable home for its occupants.</p>
                            <footer>Ryan McCoon at <cite title="Source Title">Endura Homes</cite></footer>
                        </blockquote>
                    </div>
                    <div class="col-md-2">
                        <img class="featurette-image img-responsive pull-right" src="/media/img/ryan.jpg">
                    </div>
                </div>
                <hr class="featurette-divider">
                <footer>
                    <?php include("includes/footer.php"); ?>
                </footer>
            </div>
    </body>
    </html>
