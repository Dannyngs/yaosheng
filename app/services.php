<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Product order by sort");
    $pros = $rs->fetchAll();

  ?>
<?php
require_once 'header.php';
?>

 <div class="content">
       <div class="maxw">
         <img src="_/images/services.jpg">
       </div>
        
        <div class="container ptb20">
           <div class="row">
              <h3 class="title text-center"><span><?php echo $lang['server'];?></span></h3>

                
    <?php  foreach($pros as $pro)
{?>
                          
                <div class="col-md-4 mt4">
                <a class="inser" href="/ser-post.php?id=<?php echo $pro['id']?>">
                  <div class="maxw">
                    <img src="<?php echo $imgurl.$pro['image'];?>">
                  </div>
                  <div class="move">
                     <p class="p2"><?php echo $pro[$current_lang.'_exp']?></p>
                    <button type="button" class="btn btn-primary"><?php echo $lang['more']?></button>
                  </div>
                </a>
                <h3 class="text-center"><?php echo $pro[$current_lang.'_title']?></h3>
               
              </div>
                       
 <?php
    }
?>


          
            

           </div>

           
          
        </div>
    </div><!--content end-->


 
<?php
require_once 'footer.php';
?>
