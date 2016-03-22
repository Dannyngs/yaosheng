<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Page where id=1");
    $page = $rs->fetch();


?>
<?php
require_once 'header.php';
?>


 
 <div class="content">
       <div class="maxw">
         <a href="cases.php"><img src="_/images/about.jpg"></a>
       </div>
        
        <div class="container ptb20">
           <div class="row">
              <h3 class="title text-center"><span><?php echo $page[$current_lang.'_title']?></span></h3>
              <div class="col-md-4 mt4">
                 <div class="maxw round">
                    <img src="<?php echo $page['left_img']?>">
                  </div>
              </div>

               <div class="col-md-8 mt4 p1">
                 <p><?php echo $page[$current_lang.'_content']?></p>
                 
               
              </div>

             
               
           </div>
          
        </div>
    </div><!--content end-->

<?php
require_once 'footer.php';
?>

