/**
 * Created by noxue on 2017/5/18.
 */
$(document).ready(function() {
    $('#fullpage').fullpage({
        anchors: ['kcjj', 'kcap', 'kbxx', 'ksap', 'cjwt', 'gybxw'],
//            sectionsColor: ['#222', '#00b9ec', '#ec9500', '#25bbff', '#51ff7c', '#ff64ae'],
        menu: '#myMenu',
        fitToSection: true,
        afterLoad:function(anchorLink, index) {
            var section = $(this);

            if(1==index) {
                $('.phpmysql>.html').addClass('animated flipInX');
                $('.phpmysql>.php').addClass('animated fadeInLeft');
                $('.phpmysql>.laravel').addClass('animated fadeInRight');
                $(".xxpx").addClass('animated swing');
            }  else if(2==index){
                $('.kcap-1').addClass('animated flip');

                setTimeout(function(){
                    $('.kcap-2').addClass('animated wobble');
                }, 1000);
            }
        },
        onLeave: function(index, nextIndex, direction) {
            var section = $(this);

            if(1==index) {
                $('.html').addClass("animated flipOutX");
                setTimeout(function(){
                    $('.html').removeClass('flipOutX');
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

            } else if(2==index) {
                $('.kcap-1').removeClass('flip');
                $('.kcap-2').removeClass('wobble');
            }
        }
    });
});