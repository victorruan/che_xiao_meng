<?php include('./header.php')?>

<div class="success-case">
    <div id="cases-list" class="cases-list">
        <div class="case" v-for="case in cases">
            <img src="imgs/{{case.img_name}}">
            <p>{{case.des}}</p>
        </div>
    </div>
</div>

    <script>
        $("#successful-case").addClass("active");

        new Vue({
            el:"#cases-list",
            data:{
                cases:[
                    {img_name:"case_1.jpg",des:"天鹅酿酒集团 车身广告案例展示"},
                    {img_name:"case_2.jpg",des:"欢乐英雄会 车身广告案例展示"},
                    {img_name:"case_3.jpg",des:"荷吉母婴 车身广告案例展示"},
                    {img_name:"case_4.jpg",des:"天天果园 车身广告案例展示"},
                    {img_name:"case_5.jpg",des:"沪江 车身广告案例展示"},
                    {img_name:"case_6.jpg",des:"三得利啤酒 车身广告案例展示"},
                    {img_name:"case_7.jpg",des:"奥利奥 车身广告案例展示"},
                    {img_name:"case_8.jpg",des:"奥利奥 车身广告案例展示"},
                ]
            }
        })

    </script>

<?php include('./footer.php')?>