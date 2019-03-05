$(document).ready(function(){
    $(".item").magnificPopup({
        type : 'image',
       // gallery:{
        //    enabled: true
        //},
        removavDelay : 500,
        mainClass: 'mfp-fade'
    });
});
$(function(){ 
    $('a[href^="#').bind('click.smoothscroll', function(){
        var target = $(this).attr('href'),
        bl_top = $(target).offset().top - 40;
    $('body, html').animate({scrollTop: bl_top},800);
    return false;
    })
});
