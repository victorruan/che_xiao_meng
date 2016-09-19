<?php include('./header.php')?>

<div class="contactUs">
    <div class="center">
        <div class="left">
            <p>
                联系电话: 012-31235552<br><br><br>
                公司地址：上海市 浦东新区达尔文路88号<br><br><br>
                联系人: 陈小姐
            </p>
            <a href="http://p.qiao.baidu.com//im/index?siteid=9393661&ucid=18549027" target="_blank">在线咨询 ></a>
<!--            <input type="button" value="在线咨询 >">-->
        </div>
        <div class="right">
            <div style="width:697px;height:455px;border:#ccc solid 1px;" id="dituContent"></div>
        </div>
    </div>
</div>

<div class="contactUs-des">
    <div class="des">
        <div class="left"></div>
        <div class="right">
            车小萌是一家服务型的推广企业。专业从事私家车车身广告推广的服务平台，隶属于上海凡凡网络科技有限公司。<br><br>
            企业主要旨在为品牌公司将品牌或产品推广出去、让平台的会员车主能够选择自己喜欢的品牌进行代言，并获取一定的代言报酬。从而达到企业、车主和平台三赢的效果。<br><br>
            对于广告发布者<br><br>
            帮助将企业的产品推向中高端消费者人群，并将他们的品牌带入中高端消费者的人心。<br><br>
            车小萌作为一个专业的互联网服务平台，拥有数量庞大的车主资源、高效的组织能力、独特的策化能力、丰富的渠道资源以及多元化的运作模式。可以快速、有效地将企业深入消费者的心里。
        </div>
    </div>
</div>
<!-- 成功案例 -->
<script src="js/require.js" defer async="true" data-main="js/successful.js" ></script>
<div id="success">
</div>

<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script>
    $("#contact-us").addClass("active");

    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(121.591102,31.198603);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"半岛科技园",content:"我的备注",point:"121.590685|31.199167",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
    ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor:"#808080",
                color:"#333",
                cursor:"pointer"
            });

            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>

<?php include('./footer.php')?>