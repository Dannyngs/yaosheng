<?php
require_once 'init.php';
$rs = $db->query("SELECT* FROM T_Product where shown_homepage=1 limit 3");
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
                           <li data-target="#carousel-example-generic" data-slide-to="2"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <a href="cases.php"><img src="_/images/banner1.jpg" alt="..."></a>
               
              </div>
              <div class="item">
                 <a href="cases.php"><img src="_/images/banner2.jpg" alt="..."></a>
               
              </div>
                
                 <div class="item">
                 <a href="cases.php"><img src="_/images/banner3.jpg" alt="..."></a>
               
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
        <div class="container ptb20">
           <div class="row">
              <h3 class="title text-center"><span><?php echo $lang['server'];?></span></h3>
              

              <?php  foreach($services as $show)          
{?>   
                     <div class="col-md-4 mt2">
                <a class="inser" href="ser-post.php?id=<?php echo $show['id'];?>">
                  <div class="maxw">
                    <img src="<?php echo $imgurl.$show['image'];?>">
                  </div>
                  
                  <div class="move">
                    <button type="button" class="btn btn-primary mt50"><?php echo $lang['more'];?></button>
                  </div>
                </a>
                <h3 class="text-center"><?php echo $show[$current_lang.'_title']?></h3>
                <p class="p1"><?php echo $show[$current_lang.'_exp']?></p>
              </div>
                    <?php
    }
?> 
               
           </div>
           <p class="text-center mt2 moret"><a href="services.php"><?php echo $lang['more_ser'];?></a></p>




        </div>
    </div><!--content end-->

<?php
require_once 'footer.php';
?>
