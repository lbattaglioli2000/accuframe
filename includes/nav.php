<?php
    session_start();
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">AccuFrame</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         <li
            <?php
                if($_SESSION['currentPage'] === "home"){
                    echo "class='active'";
                }
            ?>
         >
              <a href="index.php">Home</a>
        </li>
        <li
            <?php
                if($_SESSION['currentPage'] === "about"){
                    echo "class='active'";
                }
            ?>
        >
            <a href="about.php">About</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact form</a></li>
            <li><a href="#">10 second survey</a></li>
            <li><a href="#">Get an estimate</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>