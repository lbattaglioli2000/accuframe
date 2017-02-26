<?php
    session_start();
    $_SESSION["currentPage"] = "performance";
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
      <div class="container">
        <h1>Energy Performance</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p>Some builders are attempting to achieve the new standards using labor-intense methods such as caulking interior framing gaps, and/or taping and rolling exterior sheathing seams with specialty tapes. Taping of sheathing seams and water resistive barriers certainly helps to mitigate air intrusion, however in doing so air intrusion then shifts to air entrance gaps that remain unsealed; these open lineal gaps are filled with a continuous gasket sandwiched between framing components when <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is used, effectively reducing air flow. A much more durable solution than caulk/tapes that relies on surface bonding for air intrusion.</p>
          <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> has been shown (by a New York State Energy Agency) to effectively reduce air intrusion by over 80% when tested at 50 pascals in a typical wood-frame wall. In addition to its air isolation properties, <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> costs far less in materials and labor than other methods such as caulking and taping and blown-in types of insulation offering builders increased insulation options while complying with code.</p>
          <p>The on-site manufacturing concept of <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> provides an air isolation gasket that serves as a framing guide to optimize labor. This simple innovation speeds up completion time, reduces common framing errors, and allows the utilization of less-skilled workers with only minimal system training needed, an additional savings benefit in today's tight labor market.</p>
          <p><i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> has been tested in the laboratory and in the field with excellent results. Recent side by side testing of two identical houses built by Habitat for Humanity with and without <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> showed that the home without AccuFrame did not reach the current required standards for air infiltration while the home with AccuFrame easily qualified. The current requirement in the test area is less than 3 Air Changes per Hour (ACH) to qualify. The house with <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> measured 2.63 ACH whereas the house without  reached 3.81 ACH a failing test result. Additionally, the house without <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> had been sealed from the interior using silicone caulking along framing and sheathing seams, a practice not usually employed. Caulking decreases air flow, and the result obtained for the house without <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> would have been even further from qualifying if built with today's common practices.</p>
          <p>Not only did <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> house meet the current requirement with fiberglass batt insulation, but it also reached the 2018 test level which will increase air sealing requirements in the near future.</p>
        </div>
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">Importnant Links</div>
            <div class="panel-body">
              <ul>
                <li><a href="#">ASTMe 283 Test Data</a></li>
                <li><a href="#">Builders Information</a></li>
                <li><a href="#">Testing and Specifications of <i>Habitat For Humanity</i> Results</a></li>
              </ul>
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