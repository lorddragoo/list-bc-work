jQuery(document).ready(function($) {
    
    $(document).on('click', 'div.period_course a.activate_course', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var container = $(this).parents('div.period_courses');
        api_ajax_update(url, 'post', {}, function(output) {
            if (output.status != undefined) {
                if (output.status) {
                    show_notification(output.message, 'success');
                    container.html(output.content);
                    $('#top_meta_informations div.left').html(output.metainfo);
                } else {
                    show_notification(output.message, 'error');
                }
            } else {
                show_notification(messages.unknown_error, 'error');
            }
        }, function() {
            show_notification(messages.unknown_error, 'error');
        });
    });
    
    $(document).on('click', 'div.period_course a.signup_to_course', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var container = $(this).parents('div.period_course');
        api_ajax_update(url, 'post', {}, function(output) {
            if (output.status != undefined) {
                if (output.status) {
                    show_notification(output.message, 'success');
                    container.html(output.content);
                } else {
                    show_notification(output.message, 'error');
                }
            } else {
                show_notification(messages.unknown_error, 'error');
            }
        }, function() {
            show_notification(messages.unknown_error, 'error');
        });
    });
    
    $(document).on('click', 'div.period_course a.show_details', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        $.fancybox(url, {
            type: 'iframe',
            width: '100%',
            height: '100%',
            autoSize: false,
            autoHeight: false,
            autoWidth: false
        })
    });
    
});
