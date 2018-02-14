<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Slovak language

$lang['admin_courses_page_title'] = 'Kurzy';
$lang['admin_courses_fieldset_legend_new_course'] = 'Nový kurz';
$lang['admin_courses_fieldset_legend_all_courses'] = 'Všetky kurzy';
$lang['admin_courses_table_header_course_name'] = 'Názov';
$lang['admin_courses_table_header_course_period'] = 'Obdobie';
$lang['admin_courses_table_header_course_capacity'] = 'Kapacita kurzu';
$lang['admin_courses_table_header_course_task_set_count'] = 'Počet zostáv úloh';
$lang['admin_courses_table_header_controlls'] = 'Ovládanie';
$lang['admin_courses_table_controlls_edit'] = 'Upraviť';
$lang['admin_courses_table_controlls_delete'] = 'Vymazať';
$lang['admin_courses_table_controlls_task_set_types'] = 'Typy&nbsp;zostáv&nbsp;úloh';
$lang['admin_courses_table_controlls_details'] = 'Stránka&nbsp;s&nbsp;detailami';
$lang['admin_courses_table_controlls_details_hint'] = 'Toto je verejná stránka s detailami o tomto kurze (ako popisom kurzu a skupinami kurzu)';
$lang['admin_courses_table_controlls_download_solutions'] = 'Stiahnuť všetky riešenia v ZIPe.';
$lang['admin_courses_table_controlls_mail_to_group'] = 'Poslať e-mail študentom z kurzu.';
$lang['admin_courses_table_content_no_period'] = 'Obdobie nebolo vybrané!';
$lang['admin_courses_table_content_no_courses'] = 'Nie sú tu žiadne kurzy.';
$lang['admin_courses_form_label_course_name'] = 'Názov kurzu';
$lang['admin_courses_table_header_course_description'] = 'Popis kurzu';
$lang['admin_courses_form_label_course_period'] = 'Obdobie';
$lang['admin_courses_table_header_course_groups'] = 'Počet skupín';
$lang['admin_courses_form_label_course_description'] = 'Popis';
$lang['admin_courses_form_label_course_syllabus'] = 'Sylabus';
$lang['admin_courses_form_label_course_grading'] = 'Podmienky udelenia známky';
$lang['admin_courses_form_label_course_instructions'] = 'Inštrukcie pre študentov kurzu';
$lang['admin_courses_form_label_course_other_texts'] = 'Ostatné informácie';
$lang['admin_courses_form_label_course_capacity'] = 'Kapacita kurzu';
$lang['admin_courses_form_label_course_groups_change_deadline'] = 'Časové obmedzenie zmeny skupiny študentmi';
$lang['admin_courses_form_label_course_groups_change_deadline_hint'] = 'Zanechajte prázdne aby ste povolili študentom časovo neobmedzenú zmenu skupín.';
$lang['admin_courses_form_label_course_default_points_to_remove'] = 'Východzí počet bodov na odobranie';
$lang['admin_courses_form_label_course_default_points_to_remove_hint'] = 'Tento počet bodov bude automaticky vložený do dialógu Odobrať body ako východzia hodnota pre každú zostavu úloh patriacu tomuto kurzu (v editore hodnotenia riešení).';
$lang['admin_courses_form_label_test_scoring_deadline'] = 'Koniec hodnotenia pomocou testov';
$lang['admin_courses_form_label_test_scoring_deadline_hint'] = 'Tento dátum musí byť nastavený, ak chcete používať hodnotenie riešení pomocou testov. Toto nastavenie rovnako zabráni študentom používať hodnotenie riešení testami v prípade, že bol dosiahnutý stanovený dátum a čas.';
$lang['admin_courses_form_label_hide_in_lists'] = 'Skryť tento kurz v zoznamoch';
$lang['admin_courses_form_label_hide_in_lists_hint'] = 'Študenti tento kurz neuvidia v zozname, nebudú môcť požiadať o účasť na tomto kurze, kurz uvidia iba študenti s už schválenou účasťou alebo študenti, ktorých pridá do kurzu učiteľ.';
$lang['admin_courses_form_label_auto_accept_students'] = 'Akceptovať študentov automaticky';
$lang['admin_courses_form_label_auto_accept_students_hint'] = 'Výberom tejto voľby bude každý študent, ktorý sa chce zúčastniť tohoto kurzu, automaticky schválený.';
$lang['admin_courses_form_button_submit'] = 'Uložiť';
$lang['admin_courses_form_field_name'] = 'názov kurzu';
$lang['admin_courses_form_field_period'] = 'obdobie';
$lang['admin_courses_form_field_capacity'] = 'kapacita kurzu';
$lang['admin_courses_form_field_default_points_to_remove'] = 'východzí počet bodov na odobranie';
$lang['admin_courses_form_label_allow_subscription_to'] = 'Limit zápisu';
$lang['admin_courses_form_label_allow_subscription_to_hint'] = 'Limit zápisu je čas, pokial je dovolené študentom zapisovať sa na tento kurz. Nechajte prázdne ak nechcete časový limit.';
$lang['admin_courses_flash_message_save_successful'] = 'Kurz bol úspešne uložený.';
$lang['admin_courses_flash_message_save_failed'] = 'Počas ukladania kurzu sa vyskytla chyba, prosím skúsťe to znova.';
$lang['admin_courses_message_delete_question'] = 'Ste si istý, že chcete vymazať tento kurz?';
$lang['admin_courses_error_course_not_found'] = 'Kurz nebol nájdený.';
$lang['admin_course_task_set_types_editor_page_header'] = 'Typy zostáv úloh pre kurz %s';
$lang['admin_courses_fieldset_legend_add_task_set_type'] = 'Pridať typ zostavy úloh';
$lang['admin_courses_fieldset_legend_all_task_set_types'] = 'Všetky typy zostáv úloh';
$lang['admin_courses_form_label_task_set_type_name'] = 'Typ zostavy úloh';
$lang['admin_courses_form_label_upload_solution'] = 'Povoliť upload riešení';
$lang['admin_courses_form_select_option_upload_solution_yes'] = 'Áno';
$lang['admin_courses_form_select_option_upload_solution_no'] = 'Nie';
$lang['admin_courses_form_field_task_set_type_name'] = 'typ zostavy úloh';
$lang['admin_courses_form_field_upload_solution'] = 'povoliť upload riešení';
$lang['admin_courses_form_task_set_type_button_submit'] = 'Pridať';
$lang['admin_courses_table_header_task_set_type'] = 'Typ zostáv úloh';
$lang['admin_courses_table_header_upload_solution'] = 'Povoliť upload riešení';
$lang['admin_courses_message_task_set_type_updated'] = 'Nastavenia typu zostavy úloh boli úspešne upravené.';
$lang['admin_courses_message_task_set_type_update_failed'] = 'Nastavenia typu zostavy úloh sa nepodarilo upraviť.';
$lang['admin_courses_message_task_set_type_deleted'] = 'Priradený typ zostavy úloh bol odstránený.';
$lang['admin_courses_message_task_set_type_delete_failed'] = 'Priradený typ zostavy úloh sa nepodarilo odstrániť.';
$lang['admin_courses_message_delete_task_set_type_question'] = 'Naozaj chcete odstrániť priradený typ zostavy úloh? Všetky zostavy úloh z tohoto kurzu v relácie s týmto typom túto reláciu stratia.';
$lang['admin_courses_flash_message_task_set_type_save_failed'] = 'Nepodarilo sa pridať typ zostavy úloh.';
$lang['admin_courses_flash_message_task_set_type_save_successful'] = 'Typ zostavy úloh úspešne pridaný.';
$lang['admin_courses_table_header_course_task_set_types'] = 'Počet typov zostáv úloh';
$lang['admin_courses_message_after_delete'] = 'Kurz bol úspešne vymazaný.';
$lang['admin_courses_message_cant_download_solutions'] = 'Nie je možné stiahnuť riešenia z kurzu.';
$lang['admin_courses_mail_to_course_group_name_unassigned_students'] = 'Nezaradení študenti';
$lang['admin_courses_mail_to_course_page_title'] = 'Poslanie e-mailu študentom kurzu';
$lang['admin_courses_mail_to_course_error_course_not_found'] = 'Nedá sa nájsť žiadaný kurz.';
$lang['admin_courses_mail_to_course_error_send_failed'] = 'E-mail sa enpodarilo odoslat. Sú vaše e-mailové nastavenia správne?';
$lang['admin_courses_mail_to_course_error_no_students_selected'] = 'Nemôžem nájsť študentov so zoznamu vybraných študentov.';
$lang['admin_courses_mail_to_course_success_sent'] = 'E-mail bol poslaný vybraným študentom.';
$lang['admin_courses_mail_to_course_button_switch_students_on'] = 'Vybrať všetkých študentov skupiny';
$lang['admin_courses_mail_to_course_button_switch_students_off'] = 'Zrušiť výber všetkých študentov skupiny';
$lang['admin_courses_mail_to_course_form_label_subject'] = 'Predmet';
$lang['admin_courses_mail_to_course_form_label_body'] = 'Správa';
$lang['admin_courses_mail_to_course_form_label_from'] = 'Od';
$lang['admin_courses_mail_to_course_form_label_from_system'] = 'Systému';
$lang['admin_courses_mail_to_course_form_label_from_me'] = 'Mňa';
$lang['admin_courses_mail_to_course_form_label_sender_copy'] = 'Poslať kópiu správy ja sebe.';
$lang['admin_courses_mail_to_course_form_submit_button'] = 'Poslať e-mail';
$lang['admin_courses_mail_to_course_form_field_subject'] = 'predmet';
$lang['admin_courses_mail_to_course_form_field_body'] = 'správa';
$lang['admin_courses_mail_to_course_form_field_from'] = 'od';
$lang['admin_courses_mail_to_course_form_field_students'] = 'študenti';