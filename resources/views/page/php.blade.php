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
    <link rel="stylesheet" href="{{asset('css/php.css')}}" />


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.extensions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/vendors/scrolloverflow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<ul id="myMenu">
    <li data-menuanchor="kcjj"><a class="" href="#kcjj">课程内容</a></li>
    <li data-menuanchor="kcap"><a class="" href="#kcap">课程安排</a></li>
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
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section2.jpg')}}" />
        </div>
        <div class="container">
            <div class="kcap-1 table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr style="background-color:#FF8F00; color:#eee;"><th>课程</th><th>课时</th><th>内容</th></tr>
                    </thead>
                    <tbody>
                    <tr class="warning">
                        <th>html5</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="info">
                        <th>css3</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="success">
                        <th>javascript</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="danger">
                        <th>jquery</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="warning">
                        <th>bootstrap</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="info">
                        <th>php</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="success">
                        <th>mysql</th><th>1周</th><th>内容简介</th>
                    </tr>
                    <tr class="warning">
                        <th>laravel</th><th>1周</th><th>内容简介</th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a class="kcap-2 btn btn-lg btn-success" target="_blank" href="{{asset('images/php/php.png')}}">点击查看课程详情</a>
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section3.jpg')}}" />
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section4.jpg')}}" />
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section5.jpg')}}" />
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section6.jpg')}}" />
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/php.js')}}"></script>
</body>
</html>