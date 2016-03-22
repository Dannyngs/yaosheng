 <div class="footer">
        <div class="container footer-bg">
           <div class="row">
             <div class="col-md-12">
                <img src="_/images/logo2.png">
             </div>
             <div class="col-md-7 mt4">
               <p><?php echo $system[$current_lang.'_description']?></p>
             </div>
             <div class="col-md-5 mt4">
                 <p class="fs19"><b><?php echo $lang['hotl']?>：</b><?php echo $system['tel']?> <?php echo $system[$current_lang.'_name']?></p>
                 <p class="fs19"><b><?php echo $lang['email']?>：</b><a class="fcb" href="mailto:<?php echo $system['emai']?>"><?php echo $system['emai']?></a></p>
                   <p class="fs19"><b><?php echo $lang['add']?>：</b><?php echo $system[$current_lang.'_address']?></p>
             </div>
           </div>
           <div class="row mt2">
             <div class="col-md-12">
               <p class="fcblue"><?php echo $lang['footw']?></p>
               <p class="copy">© 2016 central investigations. All rights reserved.</p>
             </div>
           </div>
        </div>
    </div><!--footer end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.min.js"></script>
     <script type="text/javascript">
 $(document).ready(function(){
      
 $('#mysubmit').click(function(event){
     event.preventDefault();
 $('#mysubmit').attr("disabled",true); 
     var myname=$('#myname').val();
     var myemail=$('#myemail').val();
     var mytel=$('#mytel').val();
     var mymsg=$('#mymsg').val();
console.log(myname);
   if( myname=="" || myemail==""|| mytel=="" || mymsg=="")
       return alert("請完整填寫信息");
 
     $.post("mail.php",
     {
    myname:myname,
    myemail :myemail,
    mytel:mytel,
    mymsg:mymsg
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
              $('#mysubmit').attr("disabled",false); 
         }else{
         $('#myname').val("");$('#myemail').val("");$('#mytel').val("");$('#mymsg').val("");
         alert("遞交成功！");}
        
  });
     
 }); 

 $("#myname,#myemail,#mytel,#mymsg").blur(function(){
     var myname=$('#myname').val();
     var myemail=$('#myemail').val();
     var mytel=$('#mytel').val();
     var mymsg=$('#mymsg').val();
     if (myname!=="" && myemail!==""&& mytel!=="" && mymsg!=="") 
      $('#mysubmit').attr("disabled",false); 
    
 }); 
   
 });
</script>
  </body>
</html>