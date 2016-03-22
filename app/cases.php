<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Cases order by sort");
    $cases = $rs->fetchAll();

  ?>
<?php
require_once 'header.php';
?>

 <div class="content">
       <div class="maxw">
         <img src="_/images/cases.jpg">
       </div>
        
        <div class="container ptb20">
           <div class="row">
              <h3 class="title text-center"><span>真實個案</span></h3>

                
    <?php  foreach($cases as $case)
{?>
                          
               <div class="col-md-12 mt4 p3">
                 <h3 class="mb"><?php echo  $case[$current_lang.'_case_name'];?></h3>
                 <p><?php echo  $case[$current_lang.'_content'];?></p>
                 
               
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
