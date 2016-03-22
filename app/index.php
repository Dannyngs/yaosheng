<?php
require_once 'init.php';
$rs = $db->query("SELECT* FROM T_Product where shown_homepage=1 limit 4");
    $services = $rs->fetchAll();

?>

<?php
require_once 'header.php';
?>

    <div class="content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item allw active">
            <img src="_/images/banner.jpg" alt="">
            
          </div>
          <div class="item allw">
            <img src="_/images/banner2.jpg" alt="">
          </div>
         
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <div class="bgbf ptb20">
        <div class="container">
          <h3 class="tit text-center"><span>关于耀升</span></h3>
          <h4 class="text-center mb30">我司专业生产：特殊粘胶带、3M胶带、电子专用胶带等，欢迎来电咨询</h4>
          <p><?php echo $system['description']?></p>
          <p class="text-center mb30">
              <a href="about.php" class="btn btn-outline btn-lg">关于我们</a>
          </p>
      </div>
    </div>

     <div class="ptb20">
        <div class="container">
          <h3 class="tit text-center"><span>产品展示</span></h3>
          <h4 class="text-center">以质量求生存，以诚信求发展</h4>
          <div class="row mb30">


              <?php  foreach($services as $show)          
{?>   



                     <div class="col-md-3 allw mt30">
              <a class="showa" href="#">
                <img class="showi" src="<?php echo $imgurl.$show['image'];?>">
                <h4><?php echo $show['title']?></h4>
              </a>
            </div>

                    <?php
    }
?> 
           

          </div>
          <p class="text-center mb30">
              <a href="product.php?id=1" class="btn btn-outline btn-lg">更多产品</a>
          </p>
      </div>
    </div>

      <div class="bgbf ptb20">
        <div class="container mb30">
          <h3 class="tit text-center"><span>新闻资讯</span></h3>
          <h4 class="text-center mb30">耀升提供高品质的产品和完善的服务</h4>
          <div class="row">

            <div class="col-md-7">
              <div class="row">
               <a class="fcb" href="#">
                  <div class="col-md-6 allw">
                    <img src="_/images/in1.jpg">
                  </div>
                  <div class="col-md-6 line20">
                    <h4><b>2016耀升公司感恩年会</b></h4>
                    <p>回首往昔，羊年对于我们每个人来说都难以忘怀，他给予了我们希望，收获，更重要的是给予了我们成长的经历。<br/>展望未来，一年胜似一年景，马到成功，迎来美好明天，我们坚信：公司的事业一定能蒸蒸日上，明天将更加美好！</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-5">
               <ul class="list-unstyled">
               <li><a class="newsl clearfix" href="#">2015年11月28日公司组织户外活动<span class="pull-right">2016/1/2</span></a></li>

               <li><a class="newsl clearfix" href="#">中铁总中标印度高铁项目全长约1200公里<span class="pull-right">2016/1/2</span></a></li>

               <li><a class="newsl clearfix" href="#">工业胶带在工业各领域中得到了日益广泛的应<span class="pull-right">2016/1/2</span></a></li>

               </ul>
               <a href="news.php" style="text-decoration:underline;">more</a>
            </div>

          </div>
         
      </div>
    </div>
  </div><!--content end-->


<?php
require_once 'footer.php';
?>
