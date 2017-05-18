<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>不学网 - PHP实地培训班</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <style rel="stylesheet">
        body{
            font-family: "Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei",sans-serif;
        }

        .section{
            text-align: center;
            color:#f0f0f0;
        }

        #myMenu{
            list-style: none;
            position: fixed;
            top:10px;
            left:20px;
            z-index: 1000;
        }

        #myMenu>li{
            display: inline-block;
            width:120px;
            height:40px;
            color: #000;
            margin:5px 10px;
            background: #fff;
            background: rgba(255,255,255, 0.5);
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;

            -webkit-box-shadow: 0 0 7px 1px #fff;
            -moz-box-shadow: 0 0 7px 1px #fff;
            box-shadow: 0 0 7px 1px #fff;
        }

        #myMenu>li>a{
            width:100%;
            height:100%;
            line-height:40px;
            text-align: center;
            display: block;
            color:#000;
            text-decoration: none;
        }

        #myMenu>li.active{
            color: #fff;
            background: rgba(0,0,0, 0.5);

            -webkit-box-shadow: 0 0 7px 2px #fff;
            -moz-box-shadow: 0 0 7px 2px #fff;
            box-shadow: 0 0 7px 2px #fff;
        }

        #myMenu>li.active>a{
            color:#fff;
        }

        .bg{
            position: absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
        }

        .phpmysql{
            text-align: center;
        }

        .phpmysql>img{
            margin:auto;
        }

        .xxpx{
            height:90px;
            width:100%;
        }
        .xxpx>h1{
            color: #017dc6;
            font-weight:900;
            font-size:56px;
            margin:auto;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.extensions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/vendors/scrolloverflow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<ul id="myMenu">
    <li data-menuanchor="kcjj"><a class="" href="#kcjj">课程内容</a></li>
    <li data-menuanchor="kjap"><a class="" href="#kjap">课程安排</a></li>
    <li data-menuanchor="kbxx"><a class="" href="#kbxx">开班信息</a></li>
    <li data-menuanchor="ksap"><a class="" href="#ksap">课时安排</a></li>
    <li data-menuanchor="cjwt"><a class="" href="#cjwt">常见问题</a></li>
    <li data-menuanchor="gybxw"><a class="" href="#gybxw">关于不学网</a></li>
</ul>
<div id="fullpage">
    <div class="section active">
        <div class="bg">
            <img src="{{asset('/images/php/section1.jpg')}}" />
        </div>
        <div class="xxpx">
            <h1>不学网 - PHP学习之路</h1>
        </div>
        <div class="phpmysql">
            <img style="height:220px;" class="html" src="{{asset('/images/php/html5.png')}}" /><br/><br/>
            <img style="height:220px;" class="php" src="{{asset('/images/php/PHP-Mysql.png')}}" />&nbsp;&nbsp;
            <img style="height:220px;"  class="laravel" src="{{asset('/images/php/laravel.png')}}" />
        </div>


    </div>
    <div class="section">课程安排</div>
    <div class="section">开班信息</div>
    <div class="section">课时安排</div>
    <div class="section">常见问题</div>
    <div class="section">关于不学网</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors: ['kcjj', 'kjap', 'kbxx', 'ksap', 'cjwt', 'gybxw'],
            sectionsColor: ['#222', '#00b9ec', '#ec9500', '#25bbff', '#51ff7c', '#ff64ae'],
            menu: '#myMenu',
            fitToSection: true,
            afterLoad:function(anchorLink, index) {
                var section = $(this);

                if(1==index) {
                    $('.phpmysql>.html').addClass('animated flipInX');
                    $('.phpmysql>.php').addClass('animated fadeInLeft');
                    $('.phpmysql>.laravel').addClass('animated fadeInRight');
                    $(".xxpx").addClass('animated swing');
//                    setTimeout(function(){
//                        $('.xxpx').removeClass('wobble');
//                    }, 1000);
                }
            },
            onLeave: function(index, nextIndex, direction) {
                var section = $(this);

                if(1==index) {


                    $('.phpmysql>.html').addClass("animated flipOutX");
                    setTimeout(function(){
                        $('.phpmysql>.html').removeClass('flipOutX');
                    }, 1000);

                    $('.phpmysql>.php').addClass("animated fadeOutLeft");
                    setTimeout(function(){
                        $('.phpmysql>.php').removeClass('fadeOutLeft');
                    }, 1000);

                    $('.phpmysql>.laravel').addClass("animated fadeOutRight");
                    setTimeout(function(){
                        $('.phpmysql>.laravel').removeClass('fadeOutRight');
                    }, 1000);

                    $(".xxpx").removeClass('swing');

                }
            }
        });
    });

</script>
</body>
</html>