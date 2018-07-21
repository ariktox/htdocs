// JavaScript Document
function slideSwitch() {
    var $active = $('#slideshow IMG.active');
    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // показываем картинки по-очереди, одна за другой
    var $next =  $active.next().length ? $active.next() : $('#slideshow IMG:first');

    // если надо показывать картинки случайным образом, то можно использовать закомментированный код ниже
    var $sibs  = $active.siblings();
    var rndNum = Math.floor(Math.random() * $sibs.length );
    var $next  = $( $sibs[ rndNum ] );

    $active.addClass('last-active');
    $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1000, function() {$active.removeClass('active last-active');});
};

$(function() {
    setInterval( "slideSwitch()", 10000 ); // задержка 5 секунд
});