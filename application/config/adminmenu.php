<?php

$config['adminmenu'] = array(
    array(
        'title' => 'lang:adminmenu_title_dashboard',
        'pagetag' => 'dashboard',
        'link' => 'admin_dashboard',
        'class' => '',
        'sub' => NULL,
    ),
    array(
        'title' => 'lang:adminmenu_title_organisation',
        'pagetag' => 'organisation_tree',
        'link' => 'external:javascript:void(0);',
        'class' => 'inactive',
        'sub' => array(
            array(
                'title' => 'lang:adminmenu_title_periods',
                'pagetag' => 'periods',
                'link' => 'admin_periods',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_courses',
                'pagetag' => 'courses',
                'link' => 'admin_courses',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_groups',
                'pagetag' => 'groups',
                'link' => 'admin_groups',
                'class' => '',
                'sub' => NULL,
            ),
        ),
    ),
    array(
        'title' => 'lang:adminmenu_title_content',
        'pagetag' => 'content_tree',
        'link' => 'external:javascript:void(0);',
        'class' => 'inactive',
        'sub' => array(
            array(
                'title' => 'lang:adminmenu_title_tasks',
                'pagetag' => 'tasks',
                'link' => 'admin_tasks',
                'class' => '',
                'sub' => array(
                    array(
                        'title' => 'lang:adminmenu_title_categories',
                        'pagetag' => 'categories',
                        'link' => 'admin_categories',
                        'class' => '',
                        'sub' => NULL,
                    ),
                ),
            ),
            array(
                'title' => 'lang:adminmenu_title_task_sets',
                'pagetag' => 'task_sets',
                'link' => 'admin_task_sets',
                'class' => '',
                'sub' => array(
                    array(
                        'title' => 'lang:adminmenu_title_task_sets_sorting',
                        'pagetag' => 'task_sets_sorting',
                        'link' => 'admin_task_sets/sorting',
                        'class' => '',
                        'sub' => NULL,
                    ),
                    array(
                        'title' => 'lang:adminmenu_title_task_set_types',
                        'pagetag' => 'task_set_types',
                        'link' => 'admin_task_set_types',
                        'class' => '',
                        'sub' => NULL,
                    ),
                ),
                //'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_course_content',
                'pagetag' => 'course_content',
                'link' => 'admin_course_content',
                'class' => '',
                'sub' => array(
                    array(
                        'title' => 'lang:adminmenu_title_course_content_sorting',
                        'pagetag' => 'course_content_sorting',
                        'link' => 'admin_course_content/sorting',
                        'class' => '',
                        'sub' => NULL,
                    ),
                    array(
                        'title' => 'lang:adminmenu_title_course_content_groups',
                        'pagetag' => 'course_content_groups',
                        'link' => 'admin_course_content_groups',
                        'class' => '',
                        'sub' => array(
                            array(
                                'title' => 'lang:adminmenu_title_course_content_groups_sorting',
                                'pagetag' => 'course_content_groups_sorting',
                                'link' => 'admin_course_content_groups/sorting',
                                'class' => '',
                                'sub' => NULL,
                            ),
                        ),
                    ),
                ),
            ),
            array(
                'title' => 'lang:adminmenu_title_restrictions',
                'pagetag' => 'restrictions',
                'link' => 'admin_restrictions',
                'class' => '',
                'sub' => NULL,
            ),
        ),
    ),
    array(
        'title' => 'lang:adminmenu_title_students',
        'pagetag' => 'students_tree',
        'link' => 'external:javascript:void(0);',
        'class' => 'inactive',
        'sub' => array(
            array(
                'title' => 'lang:adminmenu_title_solutions',
                'pagetag' => 'solutions',
                'link' => 'admin_solutions',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_valuation_tables',
                'pagetag' => 'valuation_tables',
                'link' => 'admin_solutions/valuation_tables',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_participants',
                'pagetag' => 'participants',
                'link' => 'admin_participants',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_students_manager',
                'pagetag' => 'students_manager',
                'link' => 'admin_students',
                'class' => '',
                'sub' => NULL,
            ),
        ),
    ),
    array(
        'title' => 'lang:adminmenu_title_comparation',
        'pagetag' => 'comparation_tree',
        'link' => 'external:javascript:void(0);',
        'class' => 'inactive',
        'sub' => array(
            array(
                'title' => 'lang:adminmenu_title_moss_comparator',
                'pagetag' => 'moss',
                'link' => 'admin_moss',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_java_comparator',
                'pagetag' => 'comparator',
                'link' => 'admin_comparator',
                'class' => '',
                'sub' => NULL,
            ),
        ),
    ),
    array(
        'title' => 'lang:adminmenu_title_application',
        'pagetag' => 'application_tree',
        'link' => 'external:javascript:void(0);',
        'class' => 'inactive',
        'sub' => array(
            array(
                'title' => 'lang:adminmenu_title_translations_editor',
                'pagetag' => 'translations_editor',
                'link' => 'admin_translationseditor',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_application_settings',
                'pagetag' => 'settings',
                'link' => 'admin_settings',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_teachers_list',
                'pagetag' => 'teachers_list',
                'link' => 'admin_teachers/list_index',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_activity_logs',
                'pagetag' => 'logs',
                'link' => 'admin_logs',
                'class' => '',
                'sub' => NULL,
            ),
            array(
                'title' => 'lang:adminmenu_title_application_changelog',
                'pagetag' => 'settings_changelog',
                'link' => 'admin_settings/changelog',
                'class' => '',
                'sub' => NULL,
            ),
        ),
    ),
    array(
        'title' => 'lang:adminmenu_title_manual_index',
        'pagetag' => 'manual_index',
        'link' => 'help/backend',
        'class' => 'manual_index',
        'sub' => NULL,
    ),
);

?>
