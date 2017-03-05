<?php
    session_start();
    $_SESSION["currentPage"] = "directory";
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Energy Performance</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
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
            <a class="btn btn-primary btn-block" href="/performance/index.php">Performance</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" href="/builders/index.php">Builders</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary btn-block" href="/specs/index.php">Specifications and Whole House Testing</a>
        </div>
      </div>
        <footer>
            <hr>
            <?php include('../includes/footer.php'); ?>
        </footer>
    </div>
  </body>

  </html>
