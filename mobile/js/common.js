(function($) {
            
    // 메뉴 클릭 시
    $(document).on('click', '#navbar .menu > div > ul > li > a', function() {
        if ( $(this).parent().hasClass('active') ) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings().removeClass('active');
            $(this).parent().addClass('active');
        }
        return false;
    });

    $(document).on('click', '#header .btn-open-menu', function() {
        $('body').addClass('navbar-opened');
    });

    $(document).on('click', '#navbar .btn-close-menu', function() {
        $('body').removeClass('navbar-opened');
    });
    
    $(document).on('click', '#navbar', function() {
        if ( $(event.target).attr('id') === 'navbar' ) {
            $('body').removeClass('navbar-opened');
        }
    });

})(jQuery);