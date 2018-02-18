<?php

/**
 * Course content model.
 * @package LIST_DM_Models
 * @author Andrej Jursa
 */
class Course_content_model extends DataMapper {

    public $table = 'course_content';

    public $has_one = [
        'course',
        'course_content_group',
        'creator' => [
            'class' => 'Teacher',
            'other_field' => 'created_content',
            'join_self_as' => 'created_content',
            'join_other_as' => 'creator',
        ],
        'updator' => [
            'class' => 'Teacher',
            'other_field' => 'updated_content',
            'join_self_as' => 'updated_content',
            'join_other_as' => 'updator',
        ],
    ];
    
    public static function get_next_sorting_number($course_id, $content_group_id = NULL) {
        if (!is_int($course_id)) {
            if ($course_id instanceof Course && $course_id->exists() && !is_null($course_id->id)) {
                $course_id = (int)$course_id->id;
            } else {
                throw new InvalidArgumentException('Argument $course_id must be integer or preloaded Course.');
            }
        }
        $group_id = NULL;
        if (!is_null($content_group_id)) {
            if (is_int($content_group_id)) {
                $group_id = (int)$content_group_id;
            } elseif ($content_group_id instanceof Course_content_group && $content_group_id->exists() && !is_null($content_group_id->id)) {
                $group_id = (int)$content_group_id->id;
            } else {
                throw new InvalidArgumentException('Argument $content_group_id must be NULL, integer of preloaded Course_content_group.');
            }
        }
        
        if (!is_null($group_id)) {
            $course_content = new Course_content_model();
            $course_content->select('');
            $course_content->select_func('', ['MAX' => '@sorting', '+', 1], 'new_sorting');
            $course_content->where_related('course_content_group', 'id', $group_id);
            $course_content->where_related('course', 'id', $course_id);
            $course_content->where_related('course_content_group/course', 'id', $course_id);
            $course_content->get();
            
            return (int)$course_content->new_sorting;
        } else {
            $course_content = new Course_content_model();
            $course_content->select('');
            $course_content->select_func('', ['MAX' => '@sorting', '+', 1], 'new_sorting');
            $course_content->where('course_content_group_id', NULL);
            $course_content->where_related('course', 'id', $course_id);
            $course_content->get();
            
            $course_content_group = new Course_content_group();
            $course_content_group->select('');
            $course_content_group->select_func('', ['MAX' => '@sorting', '+', 1], 'new_sorting');
            $course_content_group->where_related('course', 'id', $course_id);
            $course_content_group->get();
            
            return max((int)$course_content->new_sorting, (int)$course_content_group->new_sorting);
        }
        
    }
    
    public function get_is_published() {
        if (($this->stored->id ?? NULL) === NULL) {
            return false;
        }
    
        if (!($this->stored->published ?? FALSE)) {
            return false;
        }
        
        $current_time = date('Y-m-d H:i:s');
        
        $from = $this->stored->published_from;
        $to = $this->stored->published_to;
        
        if ($from !== null && $current_time < $from) {
            return false;
        }
        
        if ($to !== null && $current_time > $to) {
            return false;
        }
        
        return true;
    }
    
    public function get_files_visibility_config() {
        if (($this->stored->id ?? NULL) === NULL) {
            return new stdClass();
        }
        
        if (($this->stored->files_visibility ?? NULL) === NULL || !self::isJson($this->stored->files_visibility)) {
            return new stdClass();
        }
        
        return json_decode($this->stored->files_visibility);
    }
    
    public function is_file_visible($language, $file) {
        $config = $this->get_files_visibility_config();
        
        if (!property_exists($config, $language)) {
            return true;
        }
        
        if (!property_exists($config->$language, $file)) {
            return true;
        }
        
        return !($config->$language)->$file;
    }
    
    public function get_files($language = '') {
        $ci = &get_instance();
        
        if (($this->stored->id ?? NULL) === NULL) {
            return [];
        }
        
        $languages = $ci->lang->get_list_of_languages();
        
        if (!array_key_exists($language, $languages)) { $language = ''; }
        
        $path = realpath(Course_content::COURSE_CONTENT_MASTER_FILE_STORAGE) . DIRECTORY_SEPARATOR . $this->stored->id . ($language !== '' ? DIRECTORY_SEPARATOR . $language : '') . DIRECTORY_SEPARATOR;
        
        if (!file_exists($path)) {
            return [];
        }
        
        $files = scandir($path);
        
        $output = [];
        
        foreach ($files as $file) {
            if (is_file($path . $file)) {
                $output[] = $file;
            }
        }
        
        return $output;
    }
    
    public static function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
    
    /**
     * Deletes relations (if parameters are set) or this object from database.
     * @param DataMapper|string $object related object to delete from relation.
     * @param string $related_field relation internal name.
     * @return bool success or fail.
     */
    public function delete($object = '', $related_field = '') {
        $this_id = $this->id;
        $result = parent::delete($object, $related_field);
        if ($result && empty($object) && !is_array($object) && !empty($this_id)) {
            $path = 'private/content/' . intval($this_id) . '/';
            if (file_exists($path)) {
                unlink_recursive($path, TRUE);
            }
        }
        return $result;
    }

}