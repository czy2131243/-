<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布心愿</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <script src="/xiangyi/js/jquery-2.1.4.js"></script>
    <!--<script src="/xiangyi/js/index.js"></script>-->
    <script src="/xiangyi/js/swiper.min.js"></script>
    <script src="/xiangyi/js/jquery-weui.min.js"></script>
    <script src="/xiangyi/js/jquery-weui.js"></script>
    <script src="/xiangyi/js/js.js"></script>
    <!--<script src="js/fastclick.js"></script>-->
    <link rel="stylesheet" href="/xiangyi/css/XiangYi.css">
    <link rel="stylesheet" href="/xiangyi/css/swiper.min.css">
    <link rel="stylesheet" href="/xiangyi/css/weui.min.css">
    <link rel="stylesheet" href="/xiangyi/css/weui.css">
    <link rel="stylesheet" href="/xiangyi/css/jquery-weui.css">
    <style>
        body{
            overflow-x: hidden;
        }
        .wrap{
            width: 100vw;
            padding-bottom: 9vh
        }
        #datatime{
            height: 14vw;
        }
        /*.active1{*/
            /*height: 2.2rem!important;*/
        /*}*/

        /*.issue-ban{*/
            /*padding: 0.2rem 0.3rem;*/
            /*margin: 0;*/
        /*}*/
        .swiper-container{
            height: 18.75%!important;
        }
        /*.issue-txt{*/
            /*height: 1.25rem;*/
            /*padding: 0.1rem;*/
        /*}*/
        /*.issue-txt textarea{*/
            /*height: 1.35rem!important;*/
        /*}*/
        /*.issue-cent{*/
            /*height: 1.6rem;*/
        /*}*/
        /*.issue-p1{*/
            /*margin-top: 1.2rem;*/
            /*font-size: 0.4rem;*/
            /*margin-bottom: 0.1rem;*/
        /*}*/
        /*.teacher-head{*/
            /*height: 1rem!important;*/
        /*}*/
        /*.teacher-head p{*/
            /*font-size: 0.42rem;*/
            /*line-height: 1rem;*/
        /*}*/
        /*.teacher-head img{*/
            /*height: 0.4rem;*/
            /*margin-top: 0.3rem!important;*/
        /*}*/
    </style>
</head>
<body style="position: relative;top:0;left:0;width:100%;height:100%;">
<div class="wrap">
    <div class="msgAlert"></div>
    <div class="teacher-head">
        <img src="/xiangyi/img/foot-white2_03.png" alt="">
        <p>发布心愿</p>
    </div>
    <p class="issue-p1">请选择心愿类型</p>
    <div class="issue-ban">
        <div class="swiper-container" id="swiper">
            <div class="swiper-wrapper lines">
                <div class="swiper-slide slide-bg lines">
                    <div class="active1 active lines" data-type="1">
                        <img src="/xiangyi/img/ssue-banner_14.png" alt="" class="lines">
                    </div>

                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="2">
                        <img src="/xiangyi/img/ssue-banner_03.png" alt="" class="lines">
                    </div>

                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="3">
                        <img src="/xiangyi/img/ssue-banner_17.png" alt="" class="lines">
                    </div>

                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="4">
                        <img src="/xiangyi/img/ssue-banner_05.png" alt="" class="lines">
                    </div>

                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="5">
                        <img src="/xiangyi/img/ssue-banner_07.png" alt="" class="lines">
                    </div>

                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="6">
                        <img src="/xiangyi/img/ssue-banner_09.png" alt="" class="lines">
                    </div>
                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="7">
                        <img src="/xiangyi/img/ssue-banner_11.png" alt="" class="lines">
                    </div>
                </div>
                <div class="swiper-slide lines">
                    <div class="active1 lines" data-type="8">
                        <img src="/xiangyi/img/qt.jpg" alt="" class="lines">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="issue-p1 issue-p2">请输入心愿内容</p>
    <div class="issue-cent">
        <div class="issue-txt">
            <textarea name="" id="textarea" cols="30" rows="10" maxlength="200"></textarea>
        </div>
    </div>
    <p class="issue-p1 issue-p2">选择心愿截止时间</p>
    <div id="datatime">
        <input style="touch-action: none" type="text" id='datetime-picker' class="issue-date"/>
    </div>
    <!-- <div class="issue-check">
        <div class="issue-checkbox">
            <label for="check1" class="label-style" data-num="1"></label>
            <input type="radio" class="check1" id="check1" style="display: none">
            <p class="p-style">求助学生</p>
        </div>
        <div class="issue-checkbox">
            <label for="check2" data-num="2"></label>
            <input type="radio" class="check1" id="check2" style="display: none">
            <p>求助老师</p>
        </div>
    </div> -->
    <div class="issue-butt" onclick="issueBut(this)">发布</div>
    <ul class="teacher-foot">
        <li class="foot-style" onclick="jumpPage(this)" data-href="/h5/student/release_wish">
            <img src="/xiangyi/img/foot-white2_03.png" alt="" class="foot-pic">
            <p class="foot-p">发布心愿</p>
        </li>
        <li onclick="jumpPage(this)" data-href="/h5/student/wish_pool">
            <img src="/xiangyi/img/box-gray_03.png" alt="" class="foot-pic">
            <p class="foot-p">心愿池</p>
        </li>
        <li onclick="jumpPage(this)" data-href="/h5/student/wish_list">
            <img src="/xiangyi/img/foot1-gray_03.png" alt="" class="foot-pic">
            <p class="foot-p">心愿列表</p>
        </li>
        <li onclick="jumpPage(this)" data-href="/h5/student/index">
            <img src="/xiangyi/img/foot-pic2_03.png" alt="" class="foot-pic1">
            <p class="foot-p">个人中心</p>
        </li>
    </ul>
    <!--程序开发中弹窗-->
        <div class="win" style="display: none">
            <div class="win-center">
                <img src="/xiangyi/img/win-pic_03.png" alt="" class="win-pic">
                <p class="win-p1">程序开发中</p>
                <p class="win-p2">关闭</p>
            </div>
        </div>
</div>
</body>
</html>
<script>
    // 跳页
    function jumpPage(e) {
        var href=$(e).attr("data-href")
        window.location.href=href
    }
    function goBack() {
        window.history.go(-1)
    }
</script>
<script>
    // 点击弹窗隐藏
    $(".win-p2").click(function () {
        $(".win").hide()
    })
</script>
<script>
    // 选择时间
    $("#datatime #datetime-picker").datetimePicker();
</script>
<script>
    // 滑动列表
    var swiper = new Swiper('#swiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
<script>
    // 单选框样式
    $(function () {
        $('body').height($('body')[0].clientHeight);

        $(".swiper-slide").click(function () {
            $(this).children(".active1").addClass("active").parents().siblings().find(".active1").removeClass("active")
        })
        $(".issue-checkbox").click(function () {
            $(this).find("label").addClass("label-style").parents().siblings().find("label").removeClass("label-style")
            $(this).find("p").addClass("p-style").parents().siblings().find("p").removeClass("p-style")
        })
    })

    windowInnerHeight = window.innerHeight;
    $(window).resize(function(){
        if(window.innerHeight < windowInnerHeight){
            $('.student-foot').css('position','absolute');
        }else{
            $('.student-foot').css('position','fixed');
        }
    });
    var data=<?php echo ($date_time); ?>;

    function issueBut(e) {
        var data_type = $("#swiper .active").attr("data-type")
        var textarea = $("textarea").val();
        var date1 = $(".issue-date").val().replace(/-/g, "/");
        var str = Math.round(new Date(date1).getTime()/1000);
        var radio = $(".label-style").attr("data-num")
        if (textarea=="") {
            msgAlert('请输入心愿内容')
        }else if (date1 == "") {
            msgAlert('请选择心愿截止时间')
        }
        else {
            if(data > str){
                msgAlert('截止时间不正确请重新选择')
            }else{
                $(e).attr('onclick',"")
                $.ajax({
                    url:"/h5/student/release_wish",
                    type:"post",
                    data:{
                        level:data_type ,
                        content:textarea,
                        end_time:date1,
                       //status_p:radio,
                    },
                    success:function (res) {
                        // console.log(res)
                        if(res.status > 0){
                            msgAlert('发布成功')
                            setTimeout(function () {
                                window.location.href = '/h5/student/wish_list'
                            },1500)
                        }else {
                            $(e).attr('onclikc',"issueBut(this)")
                        }
                    }
                })
            }

        }
    }
</script>