<?php
require_once 'init.php';
 
     $rs = $db->query("SELECT* FROM T_Product where id = ".$_GET['id']);
     $pro = $rs->fetch(); 

  ?>
<?php
require_once 'header.php';
?>

 <div class="content">
      <div class="allw"><img src="_/images/new-ban.jpg"></div>

       <div class="ptb20">
          <div class="container">
             <p class="tit2"><span style="padding-bottom:5px;color:#858585;"><a href="products.php?id=<?php echo $pro['cid'];?>" style="color:#858585;">SP系列</a> > <?php echo $pro['title'];?></span></p>
           
            <div class="row mtb20">

              <div class="col-md-12 mtb20">
                
                  <h4 class="text-center"><?php echo $pro['title'];?></h4>
                  
                  <div class="allw mtb20 neww">
                   <?php echo $pro['content']?>
                  </div>
               
              </div>

            </div>
           
        </div>
      </div>

    </div><!--content end-->

<?php
require_once 'footer.php';
?>