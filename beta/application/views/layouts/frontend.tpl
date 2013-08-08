<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>{capture assign="list_title" name="list_title_cpt"}{block name='title'}{/block}{/capture}L.I.S.T.{if $list_title} - {$list_title}{/if}</title>
        <link type="text/css" rel="stylesheet" media="screen" href="{'/public/css/frontend_general.css'|base_url}" />
        <link href="{'/public/css/list-theme/jquery-ui-1.10.2.custom.css'|base_url}" rel="stylesheet" type="text/css" />
        <link href="{'/public/css/jqueryui-timepicker-addon.css'|base_url}" rel="stylesheet" type="text/css" />
        <link href="{'/public/css/notification.css'|base_url}" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            var global_base_url = "{'/'|base_url}";
            var logout_question_text = "{translate line='pagemenu_logout_question_text'}";
            var jqueryui_datepicker_region = "{translate line='common_jqueryui_datepicker_region'|default:'en'}";
        </script>
        <script type="text/javascript" src="{'/public/js/jquery.js'|base_url}"></script>
        <script type="text/javascript" src="{$list_lang_js_messages|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/jquery.mousewheel-3.0.6.pack.js'|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/jquery.fancybox.pack.js?v=2.1.4'|base_url}"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="{'/public/css/jquery.fancybox.css?v=2.1.4'|base_url}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{'/public/css/jquery.fancybox-buttons.css?v=2.1.4'|base_url}" />
        <script type="text/javascript" src="{'/public/js/jquery.fancybox-buttons.js?v=2.1.4'|base_url}"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="{'/public/css/jquery.fancybox-thumbs.css?v=2.1.4'|base_url}" />
        <script type="text/javascript" src="{'/public/js/jquery.fancybox-thumbs.js?v=2.1.4'|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/jquery.fancybox-media.js?v=1.0.0'|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/jquery-ui-1.10.2.custom.min.js'|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/jquery-ui-timepicker-addon.js'|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/jquery.blockUI.js'|base_url}"></script>
        <script type="text/javascript" src="{'/public/js/api.js'|base_url}"></script>
        {foreach $list_internal_css_files as $file}{$file.html}{/foreach}
        {foreach $list_internal_js_files as $file}{$file.html}{/foreach}
        {block name='custom_head'}{/block}
    </head>
    <body>
        {include file='partials/frontend_general/pagemenu.tpl' inline}
        <div id="top_meta_informations">
            <div class="left">{include file='partials/frontend_general/selected_course.tpl' inline}</div>
            <div class="right">{include file='partials/frontend_general/student_panel.tpl' inline}</div>
            <div class="clear"></div>
        </div>
        <div id="mainwrap">
            <div id="leftwrap">
                <div class="title">
                    <h4>{translate line='pagemenu_title'}</h4>
                </div>
                {make_pagemenu menu=$list_pagemenu current=$list_pagemenu_current}
            </div>
            <div id="rightwrap"><div class="internal_padding">{block name='main_content'}{/block}</div></div>
            <div class="clear"></div>
        </div>
    </body>
</html>