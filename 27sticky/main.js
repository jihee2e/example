var scrollBody=$('.fix_motion')
var scrollHight;//스크롤의 높이
var sectionOffsetTop;
var sectionScrollTop;
var scrollRealHeight; //스크롤이 실제 움직이는 높이
var winScrollTop;
var scrollPercent;
var percent;

function scrollFunc(){
    scrollHeight=scrollBody.height(); //.fix_motion높이값

    sectionOffsetTop=scrollBody.offset().top; //천장에 닿는 지점 .fix_motion이 화면의 위에 닿는지점

    scrollRealHeight=scrollHeight - $(window).height(); //실제 높이를 뽑아냄 .fix_motion의 높이에서 100vh만큼 뺀 높이
    sectionScrollTop=$(window).scrollTop() - sectionOffsetTop //맨 처음스크롤 없는셈치고 0으로 시작 .fix_motion에서 0%로 시작하기 위해
    scrollPercent=sectionScrollTop / scrollRealHeight; //실제 움직일수있는 범위에서 스크롤의 이동값을 계산 (소수)
    percent = scrollPercent * 100;
    console.log(percent)

    var deviceImg=$('.device_fix .slide_wrap .slide .child');
    var imgWidth = deviceImg.width();

    if(percent >= 0 && percent < 25){
        slideChage( imgWidth * 0);
        $('.device_fix .slide_wrap .slide .child1').addClass('active')
    }else if(percent >= 25 && percent < 50){
        slideChage( imgWidth * 1)
        $('.device_fix .slide_wrap .slide .child2').addClass('active')
    }else if(percent >= 50 && percent < 75){
        slideChage( imgWidth * 2)
        $('.device_fix .slide_wrap .slide .child3').addClass('active')
    }else if(percent >= 75 ){
        slideChage( imgWidth * 3)
        $('.device_fix .slide_wrap .slide .child4').addClass('active')
    }

    if(percent<0){
        $('.device_fix .slide_wrap .slide .child').removeClass('active')
    }
}

function slideChage(moveX){
    var slide=$('.device_fix .slide_wrap .slide');
    slide.css({transform:'translateX(' + -moveX + 'px)'})
}

$(window).scroll(function(){
    scrollFunc();
});
scrollFunc();