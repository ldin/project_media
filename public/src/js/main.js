 
$( document ).ready(function() {

    //tabs
    $('#complex-services a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    //soft scrolling
    $('a.soft[href^="#"]').click(function () {
        var el = $(this).attr('href');
        $('body').animate({
            scrollTop: $(el).offset().top}, 2000);
        return false;
    });

    //Parallax Scrolling animation
    $('[data-type="background"]').each(function(){
        var $bgobj = $(this);
        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            var coords = 'center '+ yPos + 'px';
            $bgobj.css({ backgroundPosition: coords });
        });
    });

});

