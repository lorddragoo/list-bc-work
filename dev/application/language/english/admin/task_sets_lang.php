<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// English language
$lang['admin_task_sets_page_header'] = 'Task sets';
$lang['admin_task_sets_fieldset_legend_new_task_set'] = 'New task set';
$lang['admin_task_sets_fieldset_legend_all_task_sets'] = 'All task sets';
$lang['admin_task_sets_form_label_name'] = 'Name';
$lang['admin_task_sets_form_label_course_id'] = 'Course';
$lang['admin_task_sets_form_label_task_set_type_id'] = 'Type of task set';
$lang['admin_task_sets_form_label_task_set_type_id_hint'] = 'First select course for this task set!';
$lang['admin_task_sets_form_label_published'] = 'Is published?';
$lang['admin_task_sets_form_label_publish_start_time'] = 'Publish start time';
$lang['admin_task_sets_form_label_upload_end_time'] = 'Solution upload end time';
$lang['admin_task_sets_form_label_upload_end_time_hint'] = 'Leave blank to allow solution uploading without time limit.';
$lang['admin_task_sets_form_label_group_id'] = 'Task set only for group';
$lang['admin_task_sets_form_label_room_id'] = 'Publish when teaching is started in room';
$lang['admin_task_sets_form_label_points_override_enabled'] = 'Set number of points manualy?';
$lang['admin_task_sets_form_label_points_override'] = 'Number of points';
$lang['admin_task_sets_form_label_comments_enabled'] = 'Enable comments';
$lang['admin_task_sets_form_label_comments_moderated'] = 'Comments are moderated';
$lang['admin_task_sets_form_label_instructions'] = 'Instructions';
$lang['admin_task_sets_form_label_task_bonus_task'] = 'Is bonus task?';
$lang['admin_task_sets_form_label_allowed_file_types'] = 'Allowed file types';
$lang['admin_task_sets_form_label_allowed_file_types_hint'] = 'Allowed file types when student uploading solution. If student sends file of this file type, it will be compressed to ZIP archive. This is comma separated list of types (file extensions).<br /><strong>Warning:</strong> These file extensions must be defined in application/config/mimes.php, otherwise it will not work.';
$lang['admin_task_sets_form_label_allowed_test_types'] = 'Allowed test types';
$lang['admin_task_sets_form_label_internal_comment'] = 'Internal comment';
$lang['admin_task_sets_form_button_submit'] = 'Save';
$lang['admin_task_sets_form_field_name'] = 'name';
$lang['admin_task_sets_form_field_course_id'] = 'course';
$lang['admin_task_sets_form_field_group_id'] = 'task set only for group';
$lang['admin_task_sets_form_field_task_set_type_id'] = 'type of task set';
$lang['admin_task_sets_form_field_points_override'] = 'number of points';
$lang['admin_task_sets_flash_message_save_successful'] = 'Task set saved successfully.';
$lang['admin_task_sets_flash_message_save_fail'] = 'Task set failed to be saved.';
$lang['admin_task_sets_table_header_name'] = 'Name';
$lang['admin_task_sets_table_header_course'] = 'Course';
$lang['admin_task_sets_table_header_group'] = 'Group';
$lang['admin_task_sets_table_header_task_set_type'] = 'Type of task set';
$lang['admin_task_sets_table_header_tasks'] = 'Number of tasks';
$lang['admin_task_sets_table_header_published'] = 'Published?';
$lang['admin_task_sets_table_header_publish_start_time'] = 'Published from';
$lang['admin_task_sets_table_header_upload_end_time'] = 'Submits deadline';
$lang['admin_task_sets_table_header_controlls'] = 'Controlls';
$lang['admin_task_sets_table_button_edit'] = 'Edit';
$lang['admin_task_sets_table_button_delete'] = 'Delete';
$lang['admin_task_sets_table_button_open'] = 'Open';
$lang['admin_task_sets_table_button_discussion'] = 'Discussion';
$lang['admin_task_sets_table_button_clone_task_set'] = 'Clone';
$lang['admin_task_sets_table_field_published_yes'] = 'Yes';
$lang['admin_task_sets_table_field_published_no'] = 'No';
$lang['admin_task_sets_error_task_set_not_found'] = 'Requested task set was not found!';
$lang['admin_task_sets_error_task_set_cant_be_cloned'] = 'Error during cloning process, task set can\'t be cloned.';
$lang['admin_task_sets_success_task_set_cloned'] = 'Task set was cloned successfully.';
$lang['admin_task_set_javascript_message_delete_question'] = 'Are you sure with deleting of this task set?';
$lang['admin_task_set_javascript_message_after_delete'] = 'Task set was successfully deleted.';
$lang['admin_task_set_javascript_message_after_open'] = 'Task set was successfully opened.';
$lang['admin_task_set_javascript_message_clone_question'] = 'Do you want to clone this task set? Discussion messages will not be cloned. Clonet task set will not be publicated.';
$lang['admin_task_sets_javascript_remove_task_set_permission_question'] = 'Are you sure with deleting of this permission?';
$lang['admin_task_sets_javascript_task_text_title'] = 'Text of task';
$lang['admin_task_sets_filter_form_submit_button'] = 'Apply';
$lang['admin_task_sets_filter_form_field_course'] = 'Course';
$lang['admin_task_sets_filter_form_field_group'] = 'Group';
$lang['admin_task_sets_filter_form_field_task_set_type'] = 'Type of task set';
$lang['admin_task_sets_filter_form_field_tasks'] = 'Tasks';
$lang['admin_task_sets_filter_form_field_tasks_option_all'] = 'All task sets';
$lang['admin_task_sets_filter_form_field_tasks_option_without_tasks'] = 'Task sets without tasks';
$lang['admin_task_sets_filter_form_field_tasks_option_with_tasks'] = 'Task sets with tasks';
$lang['admin_task_sets_filter_form_field_name'] = 'Name';
$lang['admin_task_sets_filter_option_without_group'] = 'Task sets without group';
$lang['admin_task_sets_tabs_label_about_task_set'] = 'About task set';
$lang['admin_task_sets_tabs_label_additional_permissions'] = 'Additional permissions';
$lang['admin_task_sets_tabs_label_tasks'] = 'Tasks';
$lang['admin_task_sets_tabs_label_instructions'] = 'Instructions';
$lang['admin_task_sets_form_label_task_points_total'] = 'Points for this task';
$lang['admin_task_sets_form_label_delete_task'] = 'Delete from task set';
$lang['admin_task_sets_form_field_task_points_total'] = 'points for this task';
$lang['admin_task_sets_javascript_remove_task_question'] = 'Are you sure with removing of this task from task set?';
$lang['admin_task_sets_comments_page_title'] = 'Comments for task set "%s"';
$lang['admin_task_sets_comments_error_comments_disabled'] = 'Comments are disabled for requested task set.';
$lang['admin_task_sets_comments_error_no_comments_yet'] = 'No comments here yet!';
$lang['admin_task_sets_comments_error_reply_at_comment_from_different_task_set'] = 'You are trying to reply at comment from different task set!';
$lang['admin_task_sets_comments_error_reply_at_comment_not_exists'] = 'The comment, at which you are trying to reply, was not found.';
$lang['admin_task_sets_comments_error_save_failed'] = 'Comment failed to be save.';
$lang['admin_task_sets_comments_error_delete_comment'] = 'Comment was not deleted.';
$lang['admin_task_sets_comments_success_delete_comment'] = 'Comment was deleted.';
$lang['admin_task_sets_comments_error_approve_comment'] = 'Comment was not approved.';
$lang['admin_task_sets_comments_success_approve_comment'] = 'Comment was approved.';
$lang['admin_task_sets_comments_save_successfully'] = 'Comment was saved successfully.';
$lang['admin_task_sets_comments_new_comment'] = 'New comment';
$lang['admin_task_sets_comments_all_comments'] = 'All comments';
$lang['admin_task_sets_comments_my_settings'] = 'My settings';
$lang['admin_task_sets_comments_form_label_text'] = 'Comment text';
$lang['admin_task_sets_comments_form_label_text_hint'] = 'You can use html tags &lt;strong&gt;, &lt;a&gt;, &lt;em&gt; and &lt;span&gt;.';
$lang['admin_task_sets_comments_form_button_submit'] = 'Submit comment';
$lang['admin_task_sets_comments_form_field_text'] = 'comment text';
$lang['admin_task_sets_comments_my_settings_unsubscribe'] = 'Unsubscribe from this task set comments';
$lang['admin_task_sets_comments_my_settings_subscribe'] = 'Subscribe to this task set comments';
$lang['admin_task_sets_comments_my_settings_unsubscribe_success'] = 'You are successfully unsubscribed from this task set comments.';
$lang['admin_task_sets_comments_my_settings_unsubscribe_error'] = 'Failed to unsubscribe you from this task set comments.';
$lang['admin_task_sets_comments_my_settings_subscribe_success'] = 'You are successfully subscribed for this task set comments.';
$lang['admin_task_sets_comments_my_settings_subscribe_error'] = 'Failed to subscribe you for this task set comments.';
$lang['admin_task_sets_comments_button_reply_at'] = 'Reply at this comment';
$lang['admin_task_sets_comments_button_approve_comment'] = 'Approve this comment';
$lang['admin_task_sets_comments_button_delete_comment'] = 'Delete this comment';
$lang['admin_task_sets_comments_js_message_question_delete'] = 'Are you sure you want to delete this comment? All replies to this comment, if they are exists, will be deleted as well.';
$lang['admin_task_sets_comments_js_message_question_approve'] = 'Are you sure you want to approve this comment and display it for all?';
$lang['admin_task_sets_comments_reply_at_page_title'] = 'Reply to previous comment';
$lang['admin_task_sets_comments_email_subject_new_post'] = 'New comment!';
$lang['admin_task_sets_comments_email_new_post_body_from'] = 'Teacher <strong>%s</strong> just posted new comment into discussion of task <strong>%s</strong>.';
$lang['admin_task_sets_comments_email_new_post_body_text'] = 'Text of new comment';
$lang['admin_task_sets_edit_task_button'] = 'Edit this task';
$lang['admin_task_sets_permission_button_new_permission'] = 'New permission';
$lang['admin_task_sets_permissions_info'] = 'Here you can define specific permissions for each group. Permission specified for particular group will enable access to this task set for all students in this group! Do not add permission for group, whitch students does not have to have access to this task set.<br /><strong>WARNING:</strong> If there is one or more enabled permissions, these permissions will overrule the settings from "About task set" tab. Delete or disable all permissions to fall back to default settings from this tab.';