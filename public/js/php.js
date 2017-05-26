/**
 * Created by noxue on 2017/5/18.
 */
$(document).ready(function() {
    $('#fullpage').fullpage({
        normalScrollElements: '.table-responsive',
        anchors: ['kcjj', 'kcap', 'kbxx', 'ksap', 'cjwt', 'gybxw'],
//            sectionsColor: ['#222', '#00b9ec', '#ec9500', '#25bbff', '#51ff7c', '#ff64ae'],
        menu: '#myMenu',
        fitToSection: true,
        afterLoad:function(anchorLink, index) {
            var section = $(this);

            if(1==index) {
                $('.html').addClass('animated flipInX');
                $('.php').addClass('animated fadeInLeft');
                $('.laravel').addClass('animated fadeInRight');
                $(".xxpx").addClass('animated swing');
            }  else if(2==index){
                $('.kcap-1').addClass('animated flip');

                setTimeout(function(){
                    $('.kcap-2').addClass('animated wobble');
                }, 1000);
            } else if(3==index) {
                $(".section-31").addClass('animated fadeInLeft');
                $(".section-32").addClass('animated fadeInRight');
                $(".section-33").addClass('animated rotateIn');
            } else if (6==index) {
                $('.lxfs h3').addClass('animated swing');
            }
        },
        onLeave: function(index, nextIndex, direction) {
            var section = $(this);

            if(1==index) {
                // $('.html').removeClass('flipInX');
                $('.html').addClass("animated flipOutX");
                setTimeout(function(){
                    $('.html').removeClass('flipOutX');
                }, 1000);

                // $('.php').removeClass('fadeInLeft');
                $('.php').addClass("animated fadeOutLeft");
                setTimeout(function(){
                    $('.php').removeClass('fadeOutLeft');
                }, 1000);

                // $('.laravel').removeClass('fadeInRight');
                $('.laravel').addClass("animated fadeOutRight");
                setTimeout(function(){
                    $('.laravel').removeClass('fadeOutRight');
                }, 1000);

                $(".xxpx").removeClass('swing');

            } else if(2==index) {
                $('.kcap-1').removeClass('flip');
                $('.kcap-2').removeClass('wobble');
            } else if(3==index) {
                // $(".section-31").removeClass('fadeInLeft');
                $('.section-31').addClass("animated fadeOutRight");
                setTimeout(function(){
                    $('.section-31').removeClass('fadeOutRight');
                }, 1000);

                // $('.section-32').removeClass('fadeInRight');
                $('.section-32').addClass("animated fadeOutLeft");
                setTimeout(function(){
                    $('.section-32').removeClass('fadeOutLeft');
                }, 1000);

                // $('.section-33').removeClass('rotateIn');
                $('.section-33').addClass("animated rotateOut");
                setTimeout(function(){
                    $('.section-33').removeClass('rotateOut');
                }, 1000);
            } else if(6==index){
                $(".lxfs h3").removeClass('swing');
            }
        }
    });
});

