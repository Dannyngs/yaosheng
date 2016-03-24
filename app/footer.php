   <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="mb20">关于我们</h2>
            <p><?php echo $system['description']?></p>
          </div>
          <div class="col-md-4">
            <h2 class="mb20">联系我们</h2>
            <dl class="dl-horizontal clearfix">
              <dt><span class="glyphicon glyphicon-earphone pull-left" aria-hidden="true"></span>电话</dt>
              <dd><?php echo $system['tel']?></dd>
            </dl>

             <dl class="dl-horizontal clearfix">
              <dt><span class="glyphicon glyphicon-map-marker pull-left" aria-hidden="true"></span>地址</dt>
              <dd><?php echo $system['address']?></dd>
            </dl>

             <dl class="dl-horizontal clearfix">
              <dt><span class="glyphicon glyphicon-print pull-left" aria-hidden="true"></span>传真</dt>
              <dd><?php echo $system['fax']?></dd>
            </dl>

          </div>
          <div class="col-md-4">
            <p><img style="max-width:100%" src="_/images/f-logo.jpg"></p>
            <p>
              <a class="mr10" target="_blank" href="<?php echo $system['weibo']?>"><img src="_/images/wb.jpg"></a>
              <a href="#"><img src="_/images/wx.jpg"></a>
            </p>
          </div>
         
         <div class="col-md-12" style="font-size:13px;">
           © 2016 Yaosheng adhesive products co.Ltd. All rights reserved.
         </div>

        </div>

      </div>
    </div><!--footer end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/lightbox.min.js"></script>
    <script src="_/js/bootstrap.min.js"></script>
    <script src="_/js/jquery.lazyload.min.js"></script>

     <script type="text/javascript">
 $(document).ready(function(){
     $("img.lazy").lazyload(); 
 $('#mysubmit').click(function(event){
     event.preventDefault();
 $('#mysubmit').attr("disabled",true); 
     var myname=$('#myname').val();
     var myemail=$('#myemail').val();
     var mycop=$('#mycop').val();
     var mytitle=$('#mytitle').val();
     var mymsg=$('#mymsg').val();
console.log(myname);
   if( myname=="" || myemail==""|| mycop=="" || mytitle=="")
       return alert("請完整填寫信息");
 
     $.post("mail.php",
     {
    myname:myname,
    myemail :myemail,
    mycop:mycop,
    mytitle:mytitle,
    mymsg:mymsg
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
              $('#mysubmit').attr("disabled",false); 
         }else{
         $('#myname').val("");$('#myemail').val("");$('#mycop').val("");$('#mytitle').val("");$('#mymsg').val("");
         alert("遞交成功！");}
        
  });
     
 }); 

 $("#myname,#myemail,#mycop,#mytitle").blur(function(){
     var myname=$('#myname').val();
     var myemail=$('#myemail').val();
     var mycop=$('#mycop').val();
     var mymsg=$('#mytitle').val();
     if (myname!=="" && myemail!==""&& mycop!=="" && mytitle!=="") 
      $('#mysubmit').attr("disabled",false); 
    
 }); 
   
 });
</script>
    
  </body>
</html>