var button = $('.load_more');
var count = button.data('count');

var paged = 1;

button.click(function () {
    paged++;

    $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
            post_per_page: count,
            paged: paged,
            action: 'load_more_news'
        },
        // beforeSend: function () {
        //     button.addClass('btn-loading');
        // },
        success: function (data) {
            var result = JSON.parse(data);
            $(".news_items").append(result.posts);

            show_more(result.max_pages);
            //button.removeClass('btn-loading');
        }
    });
});


function show_more(max_pages) {
    if (paged < max_pages) {
        button.fadeIn();
    } else {
        button.hide();
    }
}

