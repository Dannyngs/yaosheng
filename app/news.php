<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_News order by ymd desc");
    $news = $rs->fetchAll();

  ?>
<?php
require_once 'header.php';
?>

 <div class="content">
      <div class="allw"><img src="_/images/ab-ban.jpg"></div>

       <div class="ptb20">
          <div class="container">
            <h3 class="tit2"><span>新闻资讯</span></h3>
           
            <div class="row mtb20">

              <?php  foreach($news as $new)
{?>


              <div class="col-md-4 mtb20">
                
                  <h4 class="text-center"><?php echo $new['title'];?></h4>
                  <hr class="nl" />
                  <p class="text-center fch"><?php echo $new['ymd'];?></p>
                  <div class="allw mb20">
                    <img src="<?php echo $imgurl.$new['img'];?>">
                  </div>
                  <p class="neww"><?php echo $new['content'];?></p>
               
              </div>


 <?php
    }
?>
  
            </div>
            
        </div>
      </div>

    </div><!--content end-->

<?php
require_once 'footer.php';
?>