<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->_init_language_for_teacher();
        $this->_load_teacher_langfile();
        $this->_initialize_teacher_menu();
        $this->usermanager->teacher_login_protected_redirect();
    }
    
    public function index() {
        $this->_select_teacher_menu_pagetag('categories');
        $this->parser->add_js_file('translation_selector.js');
        $this->parser->add_js_file('categories_api.js');
        $this->parser->add_js_file('categories/form.js');
        $this->parser->add_css_file('admin_categories.css');
        $categories = new Category();
        $structure = $categories->get_all_structured();
        $this->parser->parse('backend/categories/index.tpl', array('structure' => $structure));
    }
    
    public function tree_structure() {
        $categories = new Category();
        $structure = $categories->get_all_structured();
        $this->parser->parse('backend/categories/tree_structure.tpl', array('structure' => $structure));
    }
    
    public function new_category_form() {
        $categories = new Category();
        $structure = $categories->get_all_structured();
        $this->parser->parse('backend/categories/new_category_form.tpl', array('structure' => $structure));
    }
    
    public function create() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('category[name]', 'lang:admin_categories_form_field_category_name', 'required');
        $this->form_validation->set_rules('category[parent_id]', 'lang:admin_categories_form_field_parent_category', 'required');
        
        if ($this->form_validation->run()) {
            $category_data = $this->input->post('category');
            $category = new Category();
            $category->name = $category_data['name'];
            
            $this->_transaction_isolation();
            $this->db->trans_begin();
            
            $cansave = TRUE;
            if ($category_data['parent_id'] == 'root') {
                $category->parent_id = NULL;
            } else {
                $parent = new Category();
                $parent->get_by_id(intval($category_data['parent_id']));
                if (!$parent->exists()) {
                    $cansave = FALSE;
                } else {
                    $category->parent_id = intval($category_data['parent_id']);
                }
            }
            
            if ($cansave && $category->save() && $this->db->trans_status()) {
                $this->db->trans_commit();
                $this->messages->add_message('lang:admin_categories_flash_message_save_successful', Messages::MESSAGE_TYPE_SUCCESS);
            } else {
                $this->db->trans_rollback();
                $this->messages->add_message('lang:admin_categories_flash_message_save_failed', Messages::MESSAGE_TYPE_ERROR);
            }
            
            redirect(create_internal_url('admin_categories/new_category_form'));
        } else {
            $this->new_category_form();
        }
    }
}