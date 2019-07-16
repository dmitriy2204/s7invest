
$(function() {
    var $menu = $('.dropdown-menu__checkboxes');
    var btn = $('.dropdown-menu__button');
    $(btn).on('click', function(){
        $menu.slideToggle();
    });
});