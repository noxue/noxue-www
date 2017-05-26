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
<div class="menuBox">
    <ul id="myMenu">
        <li data-menuanchor="kcjj"><a class="" href="#kcjj">课程内容</a></li>
        <li data-menuanchor="kcap"><a class="" href="#kcap">课程安排</a></li>
        <li data-menuanchor="kbxx"><a class="" href="#kbxx">开班信息</a></li>
        <li data-menuanchor="ksap"><a class="" href="#ksap">课时安排</a></li>
        <li data-menuanchor="cjwt"><a class="" href="#cjwt">常见问题</a></li>
        <li data-menuanchor="gybxw"><a class="" href="#gybxw">联系报名</a></li>
    </ul>
</div>
<div id="fullpage">
    <div class="section active">
        <div class="bg">
            <img src="{{asset('/images/php/section1.jpg')}}" />
        </div>
        <div class="xxpx">
            <h1>PHP学习之路</h1>
        </div>
        <div class="phpmysql row">
            <div class="col-sm-12 col-xs-12"><img style="height:15rem;" class="html" src="{{asset('/images/php/html5.png')}}" /></div>
            <div class="col-sm-6 col-xs-6"><img  style="height:15rem;" class="php" src="{{asset('/images/php/PHP-Mysql.png')}}" />&nbsp;</div>
            <div class="col-sm-6 col-xs-6"><img style="height:15rem;"  class="laravel" src="{{asset('/images/php/laravel.png')}}" /></div>
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section2.jpg')}}" />
        </div>
        <div class="container">
            <div class="kcap-1 table-responsive" style="width:100%;">
                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color:#FF8F00; color:#eee;"><th style="width:200px;">课程</th><th>内容</th></tr>
                    </thead>
                    <tbody>
                    <tr class="warning">
                        <th>html/html5</th><td>让学员熟悉代码，学会html标签和html5新特性。熟练使用html5标签编写出网页</td>
                    </tr>
                    <tr class="info">
                        <th>css3</th><td>css3让网页更加漂亮，熟练使用css3样式和css3的各种高级用法。此时学员能制作出任何常见的静态页面效果</td>
                    </tr>
                    <tr class="success">
                        <th>javascript</th><td>javascript实现动态效果，学会之后，可以实现网页上一些酷炫的动态效果，如：下拉菜单，图片轮播等。</td>
                    </tr>
                    <tr class="warning">
                        <th>ajax</th><td>无刷新更新网页内容技术，让网页不用刷新就可以与服务端交互数据</td>
                    </tr>
                    <tr class="danger">
                        <th>jquery</th><td>能让我们减少工作量，用更少的代码做更多的事情。</td>
                    </tr>
                    <tr class="warning">
                        <th>bootstrap</th><td>全世界最流行的前端框架之一，让非专业的前段也能做出酷炫的网页。您现在正在看的页面也用到了这个框架。</td>
                    </tr>
                    <tr class="success">
                        <th>php</th><td>让网站具备灵魂，处理业务逻辑，不在徒有其表。我们假设您是零基础，着重讲解语法和php高级特性，为后面课程打下牢固的基础。</td>
                    </tr>
                    <tr class="info">
                        <th>正则表达式</th><td>字符串处理利器，采集程序，爬虫必备技术</td>
                    </tr>
                    <tr class="success">
                        <th>mysql</th><td>数据是每个网站的核心部分，这里我们将详细讲解数据库的各种知识点。</td>
                    </tr>
                    <tr class="info">
                        <th>redis</th><td>Key-Value数据库，讲解如何利用redis缓存数据提高并发量，解决性能问题。</td>
                    </tr>
                    <tr class="warning">
                        <th>laravel</th><td>前段有框架，后端自然也有，这是我们本次课程最难的部分。学会之后可以快速的开发出您想开发的任何网站。</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a class="kcap-2 btn btn-lg btn-danger" target="_blank" href="{{asset('images/php/php.png')}}">点击查看课程详情</a>
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section3.jpg')}}" />
        </div>
        <div class="section-31">
            <h1>2016年06月19日</h1>
        </div>
        <div class="section-33">
            <h1>开课地点:杭州</h1>
        </div>
        <div class="section-32">
            <h1>讲师:刘荣飞</h1>
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section4.jpg')}}" />
        </div>
        <div class="container">
            <h3>4个月720小时 高强度学习</h3>
            <div class="ksap-1 table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color:#FF8F00; color:#eee;"><th style="width:200px;">#</th><th>星期一</th><th>星期二</th><th>星期三</th><th>星期四</th><th>星期五</th><th>星期六</th><th>星期日</th></tr>
                    </thead>
                    <tbody>
                    <tr class="success">
                        <th>08:30~09:25</th><td colspan="5">讲课</td><td colspan="2" rowspan="11" class="warning" style="vertical-align: middle">放假</td>
                    </tr>
                    <tr class="success">
                        <th>09:30~10:25</th><td colspan="5">练习</td>
                    </tr>
                    <tr class="info">
                        <th>10:30~11:25</th><td colspan="5">讲课</td>
                    </tr>
                    <tr  class="info">
                        <th>11:30~12:00</th><td colspan="5">练习</td>
                    </tr>
                    <tr class="warning">
                        <th>12:00~13:30</th><td colspan="5">午餐时间</td>
                    </tr>
                    <tr class="success">
                        <th>13:30~14:25</th><td colspan="5">讲课</td>
                    </tr>
                    <tr class="success">
                        <th>14:30~15:25</th><td colspan="5">练习</td>
                    </tr>
                    <tr class="info">
                        <th>15:30~16:25</th><td colspan="5">讲课</td>
                    </tr>
                    <tr class="info">
                        <th>16:30~17:30</th><td colspan="5">练习</td>
                    </tr>
                    <tr class="warning">
                        <th>17:30~19:00</th><td colspan="5">晚餐时间</td>
                    </tr>
                    <tr class="danger">
                        <th>19:30~20:30</th><td colspan="5">晚自习</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section6.jpg')}}" />
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>常见问题？</h4></div>
                    <div class="panel-body cjwtslide">
                        <a class="btn btn-danger" href="#cjwt/1">整套课程需要多少钱？</a>
                        <a class="btn btn-success" href="#cjwt/2">为什么我们的培训费用比同行便宜那么多？</a>
                        <a class="btn btn-danger" href="#cjwt/3">整个行业薪资水平如何？</a>
                        <a class="btn btn-warning" href="#cjwt/4">什么学历适合做进入it行业？</a>
                        <a class="btn btn-success" href="#cjwt/5">零基础可以学会吗？</a>
                        <a class="btn btn-danger" href="#cjwt/6">学习之后能找到满意的工作吗？</a>
                        <a class="btn btn-info" href="#cjwt/7">师资和学习氛围如何？</a>
                        <a class="btn btn-warning" href="#cjwt/8">学习环境如何？</a>
                        <a class="btn btn-warning" href="#cjwt/9">可以退费吗？</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>整套课程需要多少钱？</h4></div>
                    <div class="panel-body">
                        <p style="color:#ec4113;">课程周期4个月，共<b>80天320课</b>，近<b>800小时</b>，学费分两种情况，有基础和没基础。</p>
                        <p style="color:#ff5921;">有基础：6999元</p>
                        <p style="color:#2b70ec;">零基础：7999元</p>
                        <p style="color:#444444;">基础包括：变量，条件语句，循环语句，数组，并能用这些语法解决简单的问题。(编程语言不限)</p>
                        <p style="color:#ff5921;font-weight: 900;">举个例子：稍好点的网吧，10元/小时，800个小时就是8000元。</p>
                        <p>所以以上价格<b>仅限第一个班(2017年6月19日)</b>，以后的班级根据情况会有所调整。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>为什么我们的培训费用比同行便宜那么多？</h4></div>
                    <div class="panel-body">
                        <p><b>大家可以网上了解一下，PHP培训，目前平均费用在15000。那我们凭什么比同行便宜那么多呢？有如下原因：</b></p>
                        <p>1.<b>学员的经济承受能力。</b>我问过一些在其他机构刚培训出来的学员，“你觉得这个培训值多少钱？你能承受多少钱的培训费用？”  “8000差不多”</p>
                        <p>2.<b>招生成本。</b>因为目前我们的招生主要通过以前积累的网友，所以成本并不高，不需要花大量金钱在招生上。而同行机构成功招收一个学生至少花费5000元，这些钱自然是学员买单。</p>
                        <p>3.<b>精心打造榜样学员，作为以后的案例。</b>第一期学员经过精心的培训之后，作为后面开班的榜样和参考。所以第一期是在完全不考虑赚钱的情况下进行。所以这个价格仅限第一期。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h4>整个行业薪资水平如何？</h4></div>
                    <div class="panel-body">
                        <p>了解薪水很简单，it行业中比较专业的招聘网站上面搜一下php就知道了，比如拉钩网【<a href="https://www.lagou.com/jobs/list_php?px=default&gj=3%E5%B9%B4%E5%8F%8A%E4%BB%A5%E4%B8%8B&city=%E6%9D%AD%E5%B7%9E#filterBox" target="_blank">点击查看杭州PHP 1-3年经验薪资水平</a>】，工资范围在<b>8000元-200000元</b>之间，其他城市可以自己查看。</p>
                        <p>教学老师会带着学员做项目，以项目为导向教学，所以出来之后，技术就算赶不上工作1年的程序员，咱们跟工作半年的人还是可以比吧。学好了出来，就算你学得再不好，拿个行业最低的6000工资(我相信你不会是最菜的那个)，边工作边提升，最终工作经验和技术上去了，工资自然也就上去了，毕竟经验这个东西需要时间的积累。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>什么学历适合做进入it行业？</h4></div>
                    <div class="panel-body">
                        <p>建议至少具备高中学历(包括中专/技校/职高)。</p>
                        <p>一方面是编程需要一定的理论基础，比如简单的数学思想，理解能力。</p>
                        <p>另一方面是理论知识的缺乏，会导致在it行业中走不了多远（当然极少数在工作中不断学习的人也是可以的。）</p>
                        <p>那么学历低是不是意味着找不到工作呢？其实公司主要还是看能不能做事，以及学习能力。我身边就有一些高中之后培训出来的程序员，工资远超一些大学毕业生。主要在于自己是否坚持不断的学习。</p>
                        <p>很多机构是个人都收，用一些销售技巧让学员报名，不管学了能不能找到工作，其实是很不负责的做法。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>零基础可以学会吗？</h4></div>
                    <div class="panel-body">
                        <p>零基础完全可以学会，任何人都是从零基础开始的。</p>
                        <p>我们的整套课程针对的目标学员就是零基础，从未接触过编程的学员。从零开始逐步深入，直到达到就业标准。</p>
                        <p>我们的讲师有多年自学经验，除了教会您知识，还会教您如何学习，让以后走得更远。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>学习之后能找到满意的工作吗？</h4></div>
                    <div class="panel-body">
                        <p>首先，每个人对满意的标准都不同。</p>
                        <p>我们无法保证学了就能有上万的工资，但我们能保证的是，学会之后至少可以靠技术先生存。</p>
                        <p>先生存，后发展，目光看长远一点，得到的会更多。3年PHP经验，一线城市一般都不会低于10000月薪。(当然，工作中也要继续保持学习，否则肯定原地踏步。)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>师资和学习氛围如何？</h4></div>
                    <div class="panel-body">
                        <h3>关于讲师</h3>
                        <p>姓名：刘荣飞&nbsp;&nbsp;&nbsp;&nbsp;籍贯：四川&nbsp;&nbsp;&nbsp;&nbsp;专业：虽然大学学的是计算机专业，但是几乎是自学。所以是一个放养的程序员。</p>
                        <p>学习编程7年。</p>
                        <p>格言：技术越分享越多。</p>
                        <p>经历简介：大学未毕业就开始工作，虽然换过很多工作，但是都是在做编程工作，从php程序员到php项目主管，期间自学java，后来转java项目主管。</p>
                        <p>由于一心想着做技术教育，深知教育和技术不一样，好的技术未必就是好的讲师，所以近一两年一直在培训机构做讲师，锻炼自己面对面授课的技巧。</p>
                        <p>欢迎与我交流学习技巧，我也很乐意为想自学的朋友提供方向参考。有兴趣可以QQ联系我：30670835</p>
                        <h3>学习氛围</h3>
                        <p>每个班级学员人数不会很多，一般不超过10个，所以，老师能照顾到每一位同学。如果有人没有跟上，会进行单独辅导。</p>
                        <p>晚上会有时间集体自习，提高大家的学习效率，以及时间利用率。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>学习环境如何？</h4></div>
                    <div class="panel-body">
                        <h3>每个班级10人左右，电脑8g内存，固态硬盘</h3>
                        <div class="row bgs">
                            <img class="col-md-4 col-lg-4 col-xs-4 col-sm-4" src="{{asset('images/php/bgs1.jpg')}}" />
                            <img class="col-md-4 col-lg-4 col-xs-4 col-sm-4"  src="{{asset('images/php/bgs2.jpg')}}" />
                            <img  class="col-md-4 col-lg-4 col-xs-4 col-sm-4" src="{{asset('images/php/bgs3.jpg')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>可以退费吗？</h4></div>
                    <div class="panel-body">
                        <h3>我们支持任何理由的退费，退费按照报名费用，减去已经上过的课时，退还剩余部分。该退的一分不少。</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="bg">
            <img src="{{asset('/images/php/section7.jpg')}}" />
        </div>
        <div class="container" style="color:#fff;">
            <h1>地址:耀江国际大厦A301(浙江省杭州市拱墅区莫干山路100号)</h1>
            <h1>联系QQ:30670835<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=30670835&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:30670835:51" alt="了解更多信息" title="了解更多信息"/></a></h1>
            <h1>联系电话:13758277505</h1>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/php.js')}}"></script>
</body>
</html>