<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Product where id=".$_GET['id']);
    $pro = $rs->fetch();

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

                <div class="col-md-4 mt4">
                 <div class="maxw round">
                    <img src="<?php echo $imgurl.$pro['image'];?>">
                  </div>
              </div>

               <div class="col-md-8 mt4 p2">
                 <h3><?php echo $pro[$current_lang.'_title'];?></h3>
                 <?php echo $pro[$current_lang.'_cont'];?>

                <!--  <p>一般情形，很多人外遇的對象多為身邊的人，例如公司同事或異性朋友等，通常最少一個星期會見面一次，當然也有少數例外。於是本社面對客戶的外遇搜證委託，多會建議先行跟蹤調查兩個星期，如果沒有任何斬獲，再依委託人需求詢問是否需要再度跟蹤進行外遇搜證。</p>
                 <b>本社如何進行外遇搜證？</b>
                 <p>本社會先調查出有關被查者之生活規律習慣。<br/>
再規劃出被查者的可疑時間，可疑地點。<br/>
專業探員配合被查人之狀況，搭配適當交通工具與偵探器材，嚴密進行外遇搜證行動。<br/>
確實查出被查人之行動，找出第三者並搜證外遇證據。
</p>
                  <b>為什麼要外遇捉姦？</b>
                 <p>捉姦搜證外遇證據，通常有情、理、法三方面之用；若夫妻中無過失一方，希望外遇配偶回頭者，有些人會使用捉姦搜證，來要求外遇的配偶簽下悔過書，來擔保不再有外遇。悔過書中通常附帶再犯情況的懲罰，例如：金錢賠償等。<br/>
若面臨伴侶外遇想要離婚者，捉姦的外遇證據也可以當作談判證據或呈堂證據，藉此成功離婚並獲得贍養費或子女撫養權等。<br/>
外遇捉姦是合法伴侶的權利；如果您不去爭取，那麼得到的可能是一無所有！如果您需要，歡迎與中原偵探社聯絡，我們擁有豐富外遇捉姦經驗，不僅能協助您成功搜查外遇證據，更能提供進一步協助，爭取屬於您的最大權益！</p> -->
               
              </div>


          
            

           </div>

           
          
        </div>
    </div><!--content end-->


 
<?php
require_once 'footer.php';
?>
