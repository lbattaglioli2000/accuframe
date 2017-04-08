<?php
    session_start();
    $_SESSION["currentPage"] = "directory";
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Energy Performance</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Learn more about AccuFrame&reg; Energy Seal and the data it has produced.">
    <meta name="author" content="Michael Schettine at AccuFrame">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>

  <body>
    <?php include('../includes/nav.php'); ?>
    <div class="jumbotron">
      <div class="container" style="padding-top: 5%;">
        <h1>Learn More</h1>
      </div>
    </div>
    <div class="container">
        <h2 style="text-align: center;">Please select one of the buttons below to learn more about <br><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i></h2><br>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Performance</h3>
              <p style="height: 230px;">To learn more about Air Isolation Management (or AIM), <i>AccuFrame<sup>&reg;</sup> Energy Seal's</i> effectiveness, and onsite manufacturing, click the button below.</p>
              <p><a href="/performance/index.php" class="btn btn-primary btn-block btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Builders</h3>
              <p style="height: 230px;">To learn more about how effective <i>AccuFrame<sup>&reg;</sup> Energy Seal</i> is for builders, click the button below.</p>
              <p><a href="/builders/index.php" class="btn btn-primary btn-block btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Specifications and Testimonials</h3>
              <p style="height: 230px;">To learn more about how <i>AccuFrame<sup>&reg;</sup> Energy Seal</i> was tested, and to view the data and results from those test, click the button below.</p>
              <p><a href="/specs/index.php" class="btn btn-primary btn-block btn-lg" role="button">Learn more</a></p>
            </div>
          </div>
      </div>
      </div>
        <footer>
            <hr>
            <?php include('../includes/footer.php'); ?>
        </footer>
    </div>
  </body>

  </html>
