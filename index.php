<?php
$action = (empty($_GET['action']))?'url':($_GET['action']);
include "$action.php";
$body = $action();
$ls = "";
$check_page = "";
$url = "";
$delete_page = "";
switch($action){
    case 'url':
        $url = "active";
        break;
    case 'check_page':
        $check_page = "active";
        break;
    case 'ls':
        $ls = "active";
        break;
    case 'delete_page':
        $delete_page = "active";
        break;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Animate BT代抓工具</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="starter-template.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BT動畫代抓工具</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=<?php echo $url; ?>><a href="index.php">首頁</a></li>
            <li class=<?php echo $check_page; ?>><a href="index.php?action=check_page">下載檢查</a></li>
            <li class=<?php echo $ls; ?>><a href="index.php?action=ls">影片清單</a></li>
            <li class=<?php echo $delete_page; ?>><a href="index.php?action=delete_page">檔案刪除</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <?php echo $body; ?>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>