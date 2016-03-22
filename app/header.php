<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $system[$current_lang.'_site_title']?></title>

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.min.css" rel="stylesheet">
    <link href="_/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
       <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="visible-xs xslan">
                <a href="/?lang=tra">繁</a> <a href="/?lang=sim">簡</a> <a href="/?lang=eng">E</a>
              </div>
              <a class="navbar-brand" href="#">
                <img class="hidden-sm hidden-xs" src="_/images/logo.png">
                <img class="visible-sm visible-xs" style="width:190px" src="_/images/logo.png">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right lan hidden-xs">
                <li><a href="/?lang=tra">繁</a></li>
                 <li><a href="/?lang=sim">簡</a></li>
                  <li><a href="/?lang=eng">E</a></li>
              </ul>
              
              <ul class="nav navbar-nav navbar-right text-center">
                <?php include_once "nav.php" ;?>
               
              </ul>


             
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--header end-->

