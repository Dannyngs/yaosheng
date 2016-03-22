<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Product where cid=".$_GET['id']);
    $pros = $rs->fetchAll();

  ?>
<?php
require_once 'header.php';
?>


<div class="content">
      <div class="allw"><img src="_/images/pro-ban.jpg"></div>
      
       <div class="ptb20">
          <div class="container">
            <h3 class="tit2"><span>产品展示</span></h3>
              <div class="row">

               <?php  foreach($pros as $pro)
{?>



   <div class="col-md-3 mtb20">
                  <a class="pro"  href="<?php echo $imgurl.$pro['image'];?>" data-lightbox="<?php echo $pro['cid']?>" data-title="UY-902 PE">
                    <div class="allw">
                      <img src="<?php echo $imgurl.$pro['image'];?>">
                    </div>
                    <div class="move text-center">
                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </div>
                  </a>
                  <h4 class="text-center"><?php echo $pro['title']?></h4>
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
