jQuery(document).ready(function($) {
    
    prettyPrint();
    
    api_make_tabs('tabs');
    
    $(document).on('click', 'a.button.subscribe, a.button.unsubscribe', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var target = $(this).parents('div.comments_wrap').parent();
        api_ajax_load(url, target);
    });
    
    $(document).on('submit', '#comment_form_id', function(event) {
        event.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serializeArray();
        var target = $(this).parents('div.comments_wrap').parent();
        var success = function() {
            if (target.find('.flash_message.message_error').length > 0) {
                $.scrollTo(target.find('.flash_message.message_error'), 0, { margin: true, offset: { top: -30 } });
            }
        };
        api_ajax_load(url, target, 'post', data, success);
    });
    
    $(document).on('click', 'a.button.reply_at', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var target = $(this).parents('div.comments_wrap').parent();
        $.fancybox(url, {
            type: 'iframe',
            width: '100%',
            height: '100%',
            autoSize: false,
            autoHeight: false,
            autoWidth: false,
            helpers: {
                overlay: {
                    css: {
                        background: 'rgba(255,255,255,0)'
                    }
                }
            },
            beforeClose: function() {
                var url = global_base_url + 'index.php/tasks/show_comments/' + task_id;
                api_ajax_load(url, target);
                return true;
            }
        });
    });
    
    var autoscroll = true;
    var url_anchor = api_read_url_anchor();
    if (url_anchor.substring(0, 8) === 'comments') {
        var comment_id = url_anchor.substring(9);
        if (comment_id !== '') {
            $(document).ajaxSuccess(function() {
                if (autoscroll) {
                    autoscroll = false;
                    setTimeout(function() {
                        $.scrollTo($('div.comments_wrap li.comment_id_' + comment_id), 0, { margin: true, offset: { top: -30 } });
                    }, 100);
                }
            });
        }
        $('#tabs li.comments_tab a').trigger('click');
    }
    
    $('#tests_form_id').submit(function(event) {
        event.preventDefault();
        
        var tests_execution_area = $('#tests_execution_area_id');
        if (tests_execution_area.length === 1) {
            tests_execution_area.html('');
            if (tests_object !== undefined) {
                var test_form = $('#tests_form_id');
                var test_form_data = test_form.serializeObject();
                if (typeof test_form_data.test.version !== 'undefined' && typeof test_form_data.test.id !== 'undefined') {
                    for (var task_id in tests_object) {
                        var task_header = $('<h4 class="test_task_name">' + tests_object[task_id].name + '</h4>');
                        task_header.appendTo(tests_execution_area);
                        for (var test_id in tests_object[task_id]) {
                            if (typeof tests_object[task_id][test_id].name !== 'undefined' && inArray(test_id, test_form_data.test.id)) {
                                var test_fieldset = $('<fieldset></fieldset>');
                                var test_fieldset_legend = $('<legend>' + tests_object[task_id][test_id].name + '</legend>');
                                var test_div = $('<div></div>');
                                test_fieldset_legend.appendTo(test_fieldset);
                                test_fieldset.appendTo(tests_execution_area).addClass('basefieldset').addClass('testfieldset');
                                test_div.appendTo(test_fieldset).attr('id', 'test_execution_' + test_id + '_id').addClass('test_execution_div');
                                test_div.html('<p>' + messages.test_being_executed + '</p>');
                            }
                        }
                    }
                    for (var i in test_form_data.test.id) {
                        var test_id = test_form_data.test.id[i];
                        run_test(test_id, test_form_data.test.version, 'test_execution_' + test_id + '_id');
                    }
                } else {
                    show_notification(messages.test_no_selection, 'error');
                }
            }
        }
    });
    
    var run_test = function(test_id, version_id, output_to_element_id) {
        var url = global_base_url + 'index.php/admin_tests/run_test_for_task/' + test_id + '/' + task_id + '/' + student_id + '/' + version_id;
        api_ajax_update(url, 'post', {}, function(data) {
            if (data.code !== undefined && data.text !== undefined) {
                var div = $('#' + output_to_element_id);
                var fieldset = div.parents('fieldset.testfieldset');
                div.hide();
                div.css('width', fieldset.width());
                div.show();
                div.html(data.text);
                if (data.code > 0) {
                    div.css('color', 'red');
                }
                resize_test_result_content(output_to_element_id);
            }
        });
    };
    
    var resize_test_result_content = function(output_to_element_id) {
        $(window).on('resize', function() {
            var div = $('#' + output_to_element_id);
            var fieldset = div.parents('fieldset.testfieldset');
            div.hide();
            div.css('width', fieldset.width());
            div.show();
        });
    };
    
});