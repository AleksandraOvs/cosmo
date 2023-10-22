jQuery(document).ready(function($)  {
    $('.banner-caption-inner .title').each(function(index, element) {
        var heading = $(element);
        var word_array, last_word, first_part;

        word_array = heading.html().split(/\s+/); // split on spaces
        last_word = word_array.pop();             // pop the last word
        first_part = word_array.join(' ');        // rejoin the first words together

        heading.html([first_part, ' <p class="last-word">', last_word, '</p>'].join(''));
    });

    $(function () {
        let width = $(window).width();
        let body = $('.body');
        let menu = $('.site-header__right');
    
        $(document).on('click', '.js-toggle-menu', function () {
            $(this).toggleClass('_open');
            menu.toggleClass('_open');
            body.toggleClass('_fixed');
        });
    }); 
});