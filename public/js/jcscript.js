
$(function() {
    var $menu = $('.dropdown-menu__checkboxes');
    var btn = $('.dropdown-menu__button');
    var profileLinks = $('.profile_link');

    $(btn).on('click', function(){
        $menu.slideToggle();
    });

    $('.profile_table').first().show();

    $(profileLinks).on('click', function(){
        var id = $(this).attr('data-id');
        var $targetTable = $(id);
        $targetTable.css({"display":"block"});
        //$targetTable.siblings().css({"display":"none"});
        $targetTable.siblings().css({"display":"none"});
    });
});