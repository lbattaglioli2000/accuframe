<style type="text/css">
.navbar-brand>img {
   max-height: 100%;
   height: 100%;
   width: auto;
   margin: 0 auto;
}
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-93376648-1', 'auto');
  ga('send', 'pageview');
</script>

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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Learn More <span class="caret"></span></a>
          <ul class="dropdown-menu">
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
                    if($_SESSION['currentPage'] === "builders"){
                        echo "class='active'";
                    }
                ?>
            >
                <a href="/builders/index.php">Builders</a>
            </li>
            <li
                <?php
                    if($_SESSION['currentPage'] === "specs"){
                        echo "class='active'";
                    }
                ?>
            >
                <a href="/specs/index.php">Specifications and Testimonials</a>
            </li>
              <li role="separator" class="divider"></li>
              <li>
              <a href="https://medium.com/@michael_99317" target="_blank">Blog</a>
        </li>
          </ul>
        </li>
          <li>
              <a href="https://medium.com/@michael_99317" target="_blank">Blog</a>
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
