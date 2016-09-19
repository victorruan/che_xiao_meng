<?php include('./header.php')?>
<!-- 顶部图片区域 -->
<div class="show-img">
    <div class="bg-img">
        <div class="center">
            <div class="welcome">
                welcome
            </div>
            <img class="weixin_code" src="imgs/weixin_code.jpg">
            <div class="weixin_des">
                微 信 关 注 车 小 萌<br>
                che_xiao_meng
            </div>
            <div class="imgs-animation">
                <img src="imgs/home_three.PNG">
                <img src="imgs/home_one.PNG">
                <img src="imgs/home_two.PNG">
            </div>
        </div>
    </div>
</div>

<!-- 三个标签区域 -->
<div class="tag-bar">
    <div class="center">
        <div class="des">
            <img src="imgs/home_activity.png">
            <div class="more-des">
                <p class="title">活动组织</p>
                <p class="introduce"></p>
            </div>
        </div>
        <div class="des">
            <img src="imgs/home_task.png">
            <div class="more-des">
                <p class="title">车身广告+加自媒体推广</p>
                <p class="introduce"></p>
            </div>
        </div>
        <div class="des">
            <img src="imgs/home_shop.png">
            <div class="more-des">
                <p class="title">商城分销</p>
                <p class="introduce"></p>
            </div>
        </div>
    </div>
</div>

<!-- 7大优势区域 -->
<div class="advantage">
    <div class="center">
        <p class="title">为什么选择私家车车身广告？</p>
        <div class="width-left"><div class="left one">
            <div class="number">
                <img src="imgs/home_1.png">
            </div>
            <div class="des">
                <p>唯一可移动的户外媒体形式</p>
                <br>
                <p>车身广告的传播方式是主动出现在受众的视野之中，在传播方式上最为“积极、主动”。从人的注意力角度讲，移动的物体总是比较能被注意到，因此，唯一可以移动的车身媒体同样也更能在众多户外媒体中脱颖而出，得到更多的注意，实现高到达率 。</p>
            </div>
        </div></div>
        <div class="width-right"><div class="right two">
            <div class="number">
                <img src="imgs/home_2.png">
            </div>
            <div class="des">
                <p>以多面立体展示方式传播广告信息，近距离接触消费者</p>
                <br>
                <p>车身广告的有效可视范围大于270度，从根本上消除了视角盲区，通常情况下，受众可同时接触到两个广告位，有效增加接触机会，确保广告的实际到达率。</p>
            </div>
        </div></div>
        <div class="width-left"><div class="left three">
            <div class="number">
                <img src="imgs/home_3.png">
            </div>
            <div class="des">
                <p>广告发布面积巨大，画面清晰，有效传播距离远</p>
                <br>
                <p>大面积的画面展示是广告信息有效传播的前提条件，庞大的广告画面可以带来强大的视觉冲击效果。单车上画面积大于1平方米，堪称移动的大型广告牌。MPI（媒体伯乐）在实地测量中，使用了精确的激光测距仪，车身广告最大有效可视距离达到70-75米，双层车甚至达到100米，形成范围广阔的有效可视区域。</p>
            </div>
        </div></div>
        <div class="width-right"><div class="right four">
            <div class="number">
                <img src="imgs/home_4.png">
            </div>
            <div class="des">
                <p>适合各类产品发布</p>
                <br>
                <p>车身广告几乎适合所有行业发布广告信息。随着车身广告越来越成熟，很多以往较少使用户外类型广告的客户，也已经充分认识到了车身广告的优势。</p>
            </div>
        </div></div>
        <div class="width-left"><div class="left five">
            <div class="number">
                <img src="imgs/home_5.png">
            </div>
            <div class="des">
                <p>高接触机率和稳定的接触频次</p>
                <br>
                <p>车身广告是可见机会最大的户外广告媒体。汽车平均运行距离为13KM左右，以车身广告的实际可视范围计算，单车可覆盖面积平均为0.3平方公里，每天运行次数平均10次，日均接触人次8.7万余，若以3个月发布时间计算，有效OTS可达到7800,000人次（以上海为例）。</p>
            </div>
        </div></div>
        <div class="width-right"><div class="right six">
            <div class="number">
                <img src="imgs/home_6.png">
            </div>
            <div class="des">
                <p>较强的地理针对性</p>
                <br>
                <p>车身媒体的可移动性使之可以针对性地靠近特定场所传播广告信息，达成广告目的。同时，汽车媒体线状交叉成为网络，覆盖城市各个区域，带来广阔的广告覆盖范围，完整有效地接触目标人群。</p>
            </div>
        </div></div>
        <div class="width-left"><div class="left seven">
            <div class="number">
                <img src="imgs/home_7.png">
            </div>
            <div class="des">
                <p>较低的千人成本（CPM）</p>
                <br>
                <p>据夸克市场研究公司的统计数据表明：在全国主流媒体中，杂志的平均千人成本最高，为20.8元，其次是电视广告20.64元，报纸广告10.28元，电台广告4.43元，车身广告1.19元。所以，在所有媒体中，车身广告的平均千人成本最低，最具有竞争力。</p>
            </div>
        </div></div>
    </div>
</div>

<!-- 成功案例 -->
<script src="js/require.js" defer async="true" data-main="js/successful.js" ></script>
<div id="success">
</div>

<script>
    var oneHight = parseInt($(".one .des").height())+41;
    $(".one").height(oneHight);
    var twoHight = parseInt($(".two .des").height())+41;
    $(".two").height(twoHight);
    var threeHight = parseInt($(".three .des").height())+41;
    $(".three").height(threeHight);
    var fourHight = parseInt($(".four .des").height())+41;
    $(".four").height(fourHight);
    var fiveHight = parseInt($(".five .des").height())+41;
    $(".five").height(fiveHight);
    var sixHight = parseInt($(".six .des").height())+41;
    $(".six").height(sixHight);
    var sevenHight = parseInt($(".seven .des").height())+41;
    $(".seven").height(sevenHight);

    $("#home").addClass("active");

//    $(".left, .right").hover(function () {
//        $(this).find("p").eq(1).css("display","inline");
//    },function () {
//        $(this).find("p").eq(1).css("display","none");
//    })
</script>

<?php include('./footer.php')?>