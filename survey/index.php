<?php
    session_start();
    $_SESSION["currentPage"] = "survey";
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Survey</title>
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
      <div class="container">
        <h1>10 Second Survey</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Hey!</strong> If you don't mind, please fill out this survey to help us create an even better product!
          </div>
          <iframe src="https://docs.google.com/a/accuframe.com/forms/d/e/1FAIpQLSei44sBoDwG4U4cfei9QawFjToUoIApjwwu2mXO_6uF9H_82w/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
      </div>
        <footer>
            <hr>
            <?php include('../includes/footer.php'); ?>
        </footer>
    </div>
  </body>

  </html>
