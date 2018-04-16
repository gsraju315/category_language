<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Existing_DB extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function get_databases()
    {
        $this->load->model('existing_db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('db_create');
        $this->load->view('footer');
    }
    public function generate_metadata()
    {

    }
    public function get_tables()
    {
        $this->load->model('db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('db_create');
        $this->load->view('footer');
    }
    public function get_fields()
    {
        
    }
    public function define_datacapture()
    {
        // Field level roles, vaidation functions, other functions
        $this->load->model('db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('create_workflow');
        $this->load->view('footer');
    }
    public function create_datasource()
    {
        $this->load->model('db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('analyze_db');
        $this->load->view('footer');
    }
    public function view_datasource()
    {
        $this->load->model('db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('create_page');
        $this->load->view('footer');
    }    
    public function create_library()
    {
        $this->load->model('db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('create_library');
        $this->load->view('footer');
    }
    public function define_access_control()
    {
        $this->load->model('db_model');
        $this->db_model->create_db();
        $this->load->view('header');
        $this->load->view('define_access_control');
        $this->load->view('footer');
    }
}