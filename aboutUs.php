<?php include('./header.php')?>
<div class="about-top">
    <div class="img"></div>
</div>

<div class="about-us">
        <div class="center">
            <div class="left">
                <div class="line"></div>
                <div class="dot-list">
                    <div class="dot one active" ></div>
                    <div class="dot two" ></div>
                    <div class="dot three" ></div>
                    <div class="dot four" ></div>
                </div>
                <div class="des-list">
                    <div class="des active" id="one">企业背景</div>
                    <div class="des" id="two">企业愿景</div>
                    <div class="des" id="three">服务内容</div>
                    <div class="des" id="four">业务优势</div>
                </div>
            </div>
            <div id="right" class="right" v-html="message">
            </div>
        </div>
</div>

<!-- 成功案例 -->
<script src="js/require.js" defer async="true" data-main="js/successful.js" ></script>
<div id="success">
</div>



<script>
    $("#about-us").addClass("active");
    var one_message = '车小萌前身i车配平台，是一个专门从事汽车后市场应用平台。<br><br>' +
        '在征集了大量私家车主意愿，以及企业需求，衔生而出的私家车车身广告平台。<br><br>' +
        '专门为需要推广的企来和愿意帮助推广的私家车主搭建联系的桥梁。<br><br>' +
        '企业可以通过平台获得品牌推广的渠道，私家车车身可以通过平台获得为企业品牌代言，从而获得一定的收益。<br><br>' +
        '最终达到推广企业、车主和平台三赢的目的。';
    var two_message = '连通企业与消费者，打通企业的产品销售渠道，让天堑变通途。<br><br>' +
        '让城市的马路变成一道亮丽的风景线。' ;
    var three_message = '<img style="width: 550px; margin-left: 50px;" src="imgs/about-ser.jpeg">';
    var four_message = '<img style="width: 400px; margin-left: 100px;" src="imgs/about-adv.jpeg"><br>\
    <p style="margin-left: 180px;">\
    •	用户 数量大，广告受众面更大<br>\
    •	组织 能力强，快速组织定位车主<br>\
    •	策化 能力优，产品将更深入人心</p>' ;
    var right_message = new Vue({
        el:"#right",
        data:{
            message:one_message
        }
    });

    $('.des-list .des').click(function () {
        var thisId = this.id;
        var other_el = ".dot-list ."+thisId;
        left_clicked(this,thisId,other_el);
    })

    $('.dot-list .dot').click(function () {
        var thisId = $(this).attr("class").split(' ')[1];
        var other_el = ".des-list #"+thisId;
        left_clicked(this,thisId,other_el);
    })

    function left_clicked(this_el,thisId,other_el) {
        $(this_el).siblings().removeClass("active");
        $(this_el).addClass("active");
        $(other_el).siblings().removeClass("active");
        $(other_el).addClass("active");
        switch (thisId){
            case "one":
            {
                right_message.message = one_message;
                break;
            }
            case "two":
            {
                right_message.message = two_message;
                break;
            }
            case "three":
            {
                right_message.message = three_message;
                break;
            }
            case "four":
            {
                right_message.message = four_message;
                break;
            }
            default: break;
        }
    }


</script>

<?php include('./footer.php')?>