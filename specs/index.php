<?php
    session_start();
    $_SESSION["currentPage"] = "specs";
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Specifications and Whole House Testing</title>
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
        <h1>Specifications and Whole House Testing</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <h2>Whole House Testing</h2>
            <p>In a recent test, Habitat for Humanity built two small homes (approximately 1300 sq ft each) in upstate NY, one with AccuFrame and one without.</p>
            <ul>
                <li>AccuFrame Home - built with <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> and no other air sealing methods were used for walls.</li>
                <li>Benchmark Home - identical home built on the same building site to serve as the control. The benchmark home underwent an aggressive, meticulously installed silicone-caulking application to framing areas not generally sealed, to learn how <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> would perform against stringent sealing methods.</li>
                <li>Each home had 2x6 framing @ 24” on center studs/ OSB sheathing seams taped /WRB seams taped/ batt type fiberglass insulation</li>
            </ul>
            <p>Third-party blower door testing @ 50 pascals, was conducted on both homes consecutively by a certified HERS rater with Newport Ventures on 2/14/17.</p>
            <h2>Results</h2>
            <ul>
                <li>The AccuFrame home @50 pascals measured 2.63 Air Changes per Hour (ACH)</li>
                <li>The control home @50 pascal reached 3.81 ACH</li>
            </ul>
            <p>In this particular study, <i>The AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> made the difference between passing and failing the new 3 ACH @50 pascals state energy mandate. New York States new energy code in Building Zone 6 mandates new homes must test at less than 3 ACH @50 pascals to obtain a 'Certificate of Occupancy' which is necessary for sale of the home, or undergo further air sealing and retesting until they meet the standard. When considered as total air flow, the AccuFrame home showed an impressive 30.4% decrease in air intrusion over the benchmark study home.</p> 
            <h2>Test Participant Quotes</h2>
            <blockquote class="blockquote well">
                <p>"Based on the testing done by NYSERDA, followed by the recent Whole House Air leakage tests at the Habitat for Humanity Schenectady homes, it appears that the AccuFrame product can provide much of the air leakage control needed for homebuilders using it in their homes to meet the tough new Air Leakage requirements of the ECCCNYS-2016."</p>
                <footer>
                    Michael DeWein<br>
                    Strategic Program Director, Leidos<br>
                    President, North Branch Services  
                </footer>
            </blockquote>
            <blockquote class="blockquote well">
                <p>"I like the fact that it not only meets today’s threshold; it exceeds the new codes for 2018."</p>
                <footer>
                  Peter Collisson<br>
                  President of Affordable Energy
                </footer>
            </blockquote>
            
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">Importnant Links</div>
            <div class="panel-body">
              <p>There are no links available at this time.</p>
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