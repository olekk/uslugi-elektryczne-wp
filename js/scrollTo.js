jQuery(function ($) {
        
    $.scrollTo(0);

    $('#nav1').click(function () {
        $.scrollTo($('#pierwszy'), 500);
    });
    $('#link1').click(function () {
        $.scrollTo($('#drugi'), 500);
    });
    $('#link2').click(function () {
        $.scrollTo($('#trzeci'), 500);
    });
    $('#link3').click(function () {
        $.scrollTo($('#czwarty'), 500);
    });
    $('#link4').click(function () {
        $.scrollTo($('#drugi'), 500);
    });
    
    
    $('#scrl1').click(function () {
        $.scrollTo($('#pierwszy'), 500);
    });
    $('#scrl2').click(function () {
        $.scrollTo($('#drugi'), 500);
    });
    $('#scrl3').click(function () {
        $.scrollTo($('#trzeci'), 500);
    });
    $('#scrl4').click(function () {
        $.scrollTo($('#czwarty'), 500);

    });
});
