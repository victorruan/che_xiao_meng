<div class="footer">
    <div class="des">
        <span>
            联系人：陈小姐  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            邮箱：markting#凡凡teccom（邮件联系时请把#改成@）<br><br>
            上海凡凡网络科技有限公司 版权所有2015-2018 沪ICP备15039493号-3
        </span>
    </div>
</div>
</div>
</body>
<script>
    $(window).scroll(function(){
        var left = $(this).scrollLeft();
        var topH = 40;
        var scrollH = $(this).scrollTop();
        if(topH <= scrollH){
            $(".nav-bar").css("position","fixed");
            $(".nav-bar").css("top",0);
            $(".nav-bar").css("left",-left);
            $(".nav-bar").css("box-shadow","0 0 5px 5px #ccc");
            $(".show-img").css({"margin-top":"90px"},800);
            $(".about-top").css({"margin-top":"90px"},800);
            $(".successes").css({"margin-top":"90px"},800);
            $(".contactUs").css({"margin-top":"90px"},800);
        }else{
            $(".nav-bar").css("position","relative");
            $(".nav-bar").css("left",0);
            $(".nav-bar").css("box-shadow","none");
            $(".show-img").css({"margin-top":"0"},800);
            $(".about-top").css({"margin-top":"0"},800);
            $(".successes").css({"margin-top":"0"},800);
            $(".contactUs").css({"margin-top":"0"},800);
        }
    });
</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?078142a342fbe7742cc4212b2892eda0";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();

    var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1259827081'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1259827081' type='text/javascript'%3E%3C/script%3E"));
</script>
</html>