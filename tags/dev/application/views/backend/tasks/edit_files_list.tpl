{foreach $files as $file}
<tr>
    <td>
        <a href="{internal_url url="tasks/download_file/{$task_id}/{$file.file|encode_for_url}" simple=true}" target="_blank">{$file.file|escape:'html'}</a>
        <br /><input type="text" value="{internal_url url="tasks/download_file/{$task_id}/{$file.file|encode_for_url}" simple=true}" style="width: 98%;" disabled="disabled" />
    </td>
    <td>{$file.size}</td>
    <td class="controlls"><a href="{internal_url url="admin_tasks/delete_file/{$task_id}/{$file.file|encode_for_url}"}" class="button delete">{translate line='admin_tasks_edit_files_delete_file'}<a></td>
</tr>
{/foreach}