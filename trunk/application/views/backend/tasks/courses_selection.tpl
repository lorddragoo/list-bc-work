{function courses_selection courses=[] selected=NULL}{foreach $courses as $course}<option value="course:{$course->id|intval}"{if "course:{$course->id|intval}" eq $selected} selected="selected"{/if}>{translate_text text=$course->name} / {translate_text text=$course->period_name}</option>{/foreach}{/function}