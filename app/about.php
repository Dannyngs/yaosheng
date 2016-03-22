<?php
require_once 'init.php';
  
$rs = $db->query("SELECT* FROM T_Menu where parent_id=4");
    $cats = $rs->fetchAll();

  $rs = $db->query("SELECT* FROM T_Page where id=1");
    $about = $rs->fetch();


?>
<?php
require_once 'header.php';
?>

<div class="content">
      <div class="allw"><img src="_/images/ab-ban.jpg"></div>
      
      <div class="ptb20 mt30">
        <div class="container">
         <div class="row">
           <div class="col-md-4 allw">
             <img src="_/images/ab1.jpg">
           </div>
           <div class="col-md-8">
              <h3 class="tit2"><span><?php echo $about['title']?></span></h3>
              <p><?php echo $about['content']?></p>
           </div>
         </div>
         
         
         
        
      </div>
    </div>

     <div class="ptb20">
        <div class="container">
          <h3 class="tit2"><span>服务范围</span></h3>
          <h4 class="ptb20">我司专业生产：特殊粘胶带、3M胶带、电子专用胶带等，欢迎来电咨询</h4>
         
          <p>

           <?php  foreach($cats as $cat)          
{?>   
  <a href="<?php echo $cat['url']?>" class="btn btn-outline btn-lg w1"><?php echo $cat['title']?></a>



                    <?php
    }
?> 

          </p>
      </div>
    </div>

    </div><!--content end-->

<?php
require_once 'footer.php';
?>

