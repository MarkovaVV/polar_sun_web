$(function(){
    $('.menu li').hover(function(){
        $(this).children('ul').stop(false, true).fadeIn(300);
    
    },function(){
        $(this).children('ul').stop(false, true).fadeOut(300);
    });
});

$(function(){
    $('.products').hover(function(){
        $('.products span')[0].className = 'open-title';
    
    },function(){
        $('.products span')[0].className = 'title';
    });
});