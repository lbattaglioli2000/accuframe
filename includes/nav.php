<style type="text/css">
.navbar-brand>img {
   max-height: 100%;
   height: 100%;
   width: auto;
   margin: 0 auto;
}
</style>

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
      <a href="/index.php"><img style="max-height:50px; max-width:200px;" src="/media/img/logo.png"></a>
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
              <a href="/index.php">Home</a>
        </li>
        <li
            <?php
                if($_SESSION['currentPage'] === "about"){
                    echo "class='active'";
                }
            ?>
        >
            <a href="/coming-soon/index.php">About</a>
        </li>
        <li
            <?php
                if($_SESSION['currentPage'] === "performance"){
                    echo "class='active'";
                }
            ?>
         >
              <a href="/performance/index.php">Energy Performance</a>
        </li>
        <li
            <?php
                if($_SESSION['currentPage'] === "survey"){
                    echo "class='active'";
                }
            ?>
         >
              <a href="/survey/index.php">10 Second Survey</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>