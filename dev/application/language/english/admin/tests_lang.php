<?php

$lang['admin_tests_new_test_form_title'] = 'New test';
$lang['admin_tests_error_cant_find_task'] = 'Can\t find task.';
$lang['admin_tests_error_cant_find_test'] = 'Can\t find test.';
$lang['admin_tests_error_cant_delete_test'] = 'Test can\'t be deleted.';
$lang['admin_tests_error_there_are_no_tests'] = 'There are no tests jet.';
$lang['admin_tests_test_form_label_name'] = 'Test name';
$lang['admin_tests_test_form_label_type'] = 'Test type';
$lang['admin_tests_test_form_label_subtype'] = 'Test subtype';
$lang['admin_tests_test_form_label_subtype_hint'] = 'Select test type first.';
$lang['admin_tests_test_form_label_enabled'] = 'Test enabled';
$lang['admin_tests_test_form_label_instructions'] = 'Additional instructions for student';
$lang['admin_tests_test_form_label_enable_scoring'] = 'Enable evaluation';
$lang['admin_tests_test_form_label_enable_scoring_hint'] = 'This option will enable authomatically updated evaluation of student solution based on successfulness of this test.';
$lang['admin_tests_test_form_label_timeout'] = 'Test timeout';
$lang['admin_tests_test_form_label_timeout_hint'] = 'Time in milisecond, which is allowed for the test to run.';
$lang['admin_tests_test_form_button_submit'] = 'Save';
$lang['admin_tests_test_form_field_name'] = 'test name';
$lang['admin_tests_test_form_field_type'] = 'test type';
$lang['admin_tests_test_form_field_subtype'] = 'test subtype';
$lang['admin_tests_test_form_field_timeout'] = 'test timeout';
$lang['admin_tests_flash_message_new_test_saved'] = 'New test saved successfully.';
$lang['admin_tests_flash_message_new_test_failed'] = 'New test fail to be saved.';
$lang['admin_tests_flash_message_configuration_saved'] = 'Test configuration saved successfully.';
$lang['admin_tests_flash_message_configuration_save_failed'] = 'Test configuration fail to be saved.';
$lang['admin_tests_test_table_header_name'] = 'Test name';
$lang['admin_tests_test_table_header_type'] = 'Test type';
$lang['admin_tests_test_table_header_subtype'] = 'Test subtype';
$lang['admin_tests_test_table_header_enabled'] = 'Test enabled';
$lang['admin_tests_test_table_header_enable_scoring'] = 'Evaluated';
$lang['admin_tests_test_table_header_controlls'] = 'Controlls';
$lang['admin_tests_test_table_col_enabled_yes'] = 'Yes';
$lang['admin_tests_test_table_col_enabled_no'] = 'No';
$lang['admin_tests_test_table_button_execute'] = 'Execute';
$lang['admin_tests_test_table_button_configure'] = 'Configure';
$lang['admin_tests_test_table_button_delete'] = 'Delete';
$lang['admin_tests_configure_test_page_title'] = 'Test configuration';
$lang['admin_tests_delete_test_success'] = 'Test deleted successfully.';
$lang['admin_tests_js_message_delete_question'] = 'Do you want to delete this test?';
$lang['admin_tests_testing_execution_page_header'] = 'Testing execution';
$lang['admin_tests_prepare_execution_form_label_file'] = 'Source codes in ZIP';
$lang['admin_tests_prepare_execution_form_button_submit'] = 'Upload and execute';
$lang['admin_tests_testing_execution_test_is_being_executed_message'] = 'Test is being executed, this may take some time ...';
$lang['admin_tests_error_message_failed_to_run_student_test'] = 'Failed to start student test! Task set, student or solution file not found.';
$lang['admin_tests_test_result_nothing_to_update'] = 'There is nothing to update, your score is not better like your last score. Current score is %.1f points, best score was %.1f points.';
$lang['admin_tests_test_result_disabled'] = 'Can\'t compute score, this feature is disable.';
$lang['admin_tests_test_result_input_error'] = 'Can\'t compute score, because of error on input.';
$lang['admin_tests_test_result_no_evaluationg_tests'] = 'Can\'t compute score, because there are no tests defined for solution evaluation.';
$lang['admin_tests_test_result_minimum_number_of_test_not_selected'] = 'Can\'t compute score, bacause you must select tests from at least %d tasks for evaluation.';
$lang['admin_tests_test_result_solution_not_considered'] = 'Your solution has been marked as not considered in evaluation, hence updating your score by tests is impossible.';
$lang['admin_tests_evaluation_table_header_task_name'] = 'Task';
$lang['admin_tests_evaluation_table_header_percentage'] = 'Percentage';
$lang['admin_tests_evaluation_table_header_points'] = 'Points';
$lang['admin_tests_evaluation_table_header_type'] = 'Bonus?';
$lang['admin_tests_evaluation_type_bonus_no'] = 'No';
$lang['admin_tests_evaluation_type_bonus_yes'] = 'Yes';
$lang['admin_tests_evaluation_table_footer'] = 'Final points are calculated as a sum of all bonus tasks plus sum of at most %s non bonus tasks with highest points.';
$lang['admin_tests_enqueue_test_error_not_test_type_selected'] = 'Error: test language was not selected.';
$lang['admin_tests_enqueue_test_error_no_version_selected'] = 'Error: version of solution wat not selecte.';
$lang['admin_tests_enqueue_test_error_no_tests_selected'] = 'Error: no tests selected.';
$lang['admin_tests_enqueue_test_error_task_set_or_student_not_found'] = 'Error: submited data do not contain information about task set or student.';
$lang['admin_tests_enqueue_test_error_cant_add_to_queue'] = 'Error: can\'t enqueue tests, try again later.';
$lang['admin_tests_enqueue_test_success'] = 'Test were secessfully enqueued for execution.';
$lang['admin_tests_student_test_queue_worker_not_assigned'] = 'No worker yet!';
$lang['admin_tests_student_test_queue_not_finished'] = 'Not finished yet!';
$lang['admin_tests_student_test_queue_unknown_status'] = 'Unknown';
$lang['admin_tests_student_test_queue_status_0'] = 'Waiting';
$lang['admin_tests_student_test_queue_status_1'] = 'Being executed';
$lang['admin_tests_student_test_queue_status_2'] = 'Finished';
$lang['admin_tests_student_test_queue_status_3'] = 'Error';
$lang['admin_tests_student_test_queue_table_header_test_type'] = 'Type:tests';
$lang['admin_tests_student_test_queue_table_header_version'] = 'Version';
$lang['admin_tests_student_test_queue_table_header_start'] = 'Start';
$lang['admin_tests_student_test_queue_table_header_finish'] = 'Finish';
$lang['admin_tests_student_test_queue_table_header_worker'] = 'Worker ID';
$lang['admin_tests_student_test_queue_table_header_priority'] = 'Priority';
$lang['admin_tests_student_test_queue_table_header_status'] = 'Status';