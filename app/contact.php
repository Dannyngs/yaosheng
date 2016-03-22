<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>

<div class="content">
      <div class="allw">
         <div style="width:100%;height:450px;border:#ccc solid 1px;font-size:12px" id="map"></div>
      </div>
      
      <div class="ptb20 mt30">
        <div class="container">
         <div class="row">
           <div class="col-md-4 fcbl">
             <h3 class="tit2"><span>联系我们</span></h3>
             <h4 class="mtb20" style="font-size:20px;">深圳市耀升胶粘制品有限公司</h4>
             <dl class="dl-horizontal cont">
              <dt>电话：</dt>
              <dd><?php echo $system['tel']?></dd>

              <dt>传真：</dt>
              <dd><?php echo $system['line']?></dd>

              <dt>网址：</dt>
              <dd><a href="http://www.ystape.com">http://www.ystape.com</a></dd>

              <dt>邮箱：</dt>
              <dd><a href="mailto:<?php echo $system['emai']?>"><?php echo $system['emai']?></a></dd>
            </dl>
           </div>
           <div class="col-md-8">
              
            
           </div>
         </div>
         
         
         
        
      </div>
    </div>

    </div><!--content end-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=VwzDP0Fqfv9GvNfZdrD8vC2Q"></script>
   <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(114.037952,22.675608),16);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>

 
<?php
require_once 'footer.php';
?>