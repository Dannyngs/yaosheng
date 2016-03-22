<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>

<div class="content">
       <div class="maxw">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.7477020808606!2d114.13997931425774!3d22.287545048991486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403ff80f212c839%3A0x8933f435b4b7d9e6!2z6KW_54ef55uk5q2j6KGXMTjomZ_llZ_mraPkuK3lv4M!5e0!3m2!1szh-TW!2shk!4v1457763191423" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
        
        <div class="container ptb20">
           <div class="row">
              <h3 class="title text-center"><span><?php echo $lang['contact']?></span></h3>
               <div class="col-md-4 maxw ptb20">
                <img src="_/images/cont1.png">
                <p class="mt6"><?php echo $system['tel']?> <?php echo $system[$current_lang.'_name']?></p>
             </div>

             <div class="col-md-4 maxw ptb20">
                <img src="_/images/cont2.png">
                <p class="mt6"><?php echo $system[$current_lang.'_address']?></p>
             </div>

             <div class="col-md-4 maxw ptb20">
                <img src="_/images/cont3.png">
                <p class="mt6"><a class="fcw" href="mailto:<?php echo $system['emai']?>"><?php echo $system['emai']?></a></p>
             </div>
           
           </div>

          
        </div>
    </div><!--content end-->
    <div class="contact">
     <div class="container ptb20">
       <div class="row">
         <div class="col-md-12">   
            <p class="text-center fcw"><?php echo $lang['ctw']?></p>
           </div>
         <form>
           <div class="col-md-4 col-md-offset-1 mt2">
             <input id="myname" type="text" class="form-control" placeholder="<?php echo $lang['name']?>">
             <input id="mytel" type="tel" class="form-control mt2" placeholder="<?php echo $lang['tel']?>">
             <input id="myemail" type="email" class="form-control mt2" placeholder="<?php echo $lang['email']?>">
           </div>
           <div class="col-md-6 mt2">
             <textarea id="mymsg" class="form-control" style="height:140px;" placeholder="<?php echo $lang['msg']?>"></textarea>
           </div>
           <div class="col-md-12 mt2 text-center">
              <button id="mysubmit" type="submit" class="btn btn-primary bg-b"><?php echo $lang['sub']?></button>
           </div>
         </form>
       </div>
     </div>
    </div>
 
<?php
require_once 'footer.php';
?>