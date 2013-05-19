{extends file='layouts/backend.tpl'}
{block title}{translate line='admin_task_sets_page_header'}{/block}
{block main_content}
	<h2>{translate line='admin_task_sets_page_header'}</h2>
	{include file='partials/backend_general/flash_messages.tpl' inline}
	<fieldset>
            <legend>{translate line='admin_task_sets_fieldset_legend_new_task_set'}</legend>
            <form action="{internal_url url='admin_task_sets/create'}" method="post" id="new_task_set_form_id">
                {include file='backend/task_sets/new_task_set_form.tpl' inline}
            </form>
	</fieldset>
	<fieldset>
            <legend>{translate line='admin_task_sets_fieldset_legend_all_task_sets'}</legend>
            <div class="filter_wrap">
                <form action="{internal_url url='admin_students/table_constent'}" method="post" id="filter_form_id">
                    <div class="field">
                        <label>{translate line='admin_task_sets_filter_form_field_course'}:</label>
                        <p class="input"><select name="filter[course]" size="1">{list_html_options options=$courses selected=$filter.course|intval}</select></p>
                    </div>
                    <div class="field">
                        <label>{translate line='admin_task_sets_filter_form_field_task_set_type'}:</label>
                        <p class="input"><select name="filter[task_set_type]" size="1">{list_html_options options=$task_set_types selected=$filter.task_set_type|intval}</select></p>
                    </div>
                    <div class="field">
                        <label>{translate line='admin_task_sets_filter_form_field_tasks'}:</label>
                        <p class="input"><input type="radio" name="filter[tasks]" value=""{if !$filter.tasks} checked="checked" {/if}id="filter_tasks_all_id" /> <label for="filter_tasks_all_id">{translate line='admin_task_sets_filter_form_field_tasks_option_all'}</label></p>
                        <p class="input"><input type="radio" name="filter[tasks]" value="0"{if $filter.tasks eq '0'} checked="checked" {/if}id="filter_tasks_without_tasks_id" /> <label for="filter_tasks_without_tasks_id">{translate line='admin_task_sets_filter_form_field_tasks_option_without_tasks'}</label></p>
                        <p class="input"><input type="radio" name="filter[tasks]" value="1"{if $filter.tasks eq '1'} checked="checked" {/if}id="filter_tasks_with_tasks_id" /> <label for="filter_tasks_with_tasks_id">{translate line='admin_task_sets_filter_form_field_tasks_option_with_tasks'}</label></p>
                    </div>
                    <div class="field">
                        <label>{translate line='admin_task_sets_filter_form_field_name'}:</label>
                        <p class="input"><input type="text" name="filter[name]" value="{$filter.name|escape:'html'}" /></p>
                    </div>
                    <div class="buttons">
                        <input type="submit" name="filter_submit" value="{translate line='admin_task_sets_filter_form_submit_button'}" class="button" />
                        <input type="hidden" name="filter[page]" value="{$filter.page|default:1|intval}" />
                        <input type="hidden" name="filter[rows_per_page]" value="{$filter.rows_per_page|default:25|intval}" />
                    </div>
                </form>
            </div>
            <table class="task_sets_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{translate line='admin_task_sets_table_header_name'}</th>
                        <th>{translate line='admin_task_sets_table_header_course'}</th>
                        <th>{translate line='admin_task_sets_table_header_group'}</th>
                        <th>{translate line='admin_task_sets_table_header_task_set_type'}</th>
                        <th>{translate line='admin_task_sets_table_header_tasks'}</th>
                        <th>{translate line='admin_task_sets_table_header_published'}</th>
                        <th colspan="3" class="controlls">{translate line='admin_task_sets_table_header_controlls'}</th>
                    </tr>
                </thead>
                <tfoot id="table_pagination_footer_id"></tfoot>
                <tbody id="table_content_id"></tbody>
            </table>
	</fieldset>
{/block}
{block custom_head}<script type="text/javascript">
    var messages = {
        delete_question: '{translate line="admin_task_set_javascript_message_delete_question"}',
        after_delete: '{translate line="admin_task_set_javascript_message_after_delete"}',
        after_open: '{translate line="admin_task_set_javascript_message_after_open"}'
    }; 
</script>{/block}