<?php
class MY_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Admin_model', '', TRUE);
    }

    protected function load_header($extra_data = array()) {


        $data = array(
            'username' => $this->session->userdata('admin_username'),
            'success_message' => $this->session->flashdata('success'),
            'error_message' => $this->session->flashdata('error'),
            //'categories' =>$this->Admin_model->get_category()
            );



        $this->load->view('admin/header', array_merge($data, $extra_data));
        $this->session->userdata('username');
    }

    protected function load_footer($extra_data = array()) {
        $this->load->view('admin/footer', $extra_data);
    }

    protected function is_logged_in() {
        return !is_null($this->session->userdata('admin_logged_in'));
    }

    protected function required_login() {
        if (!$this->is_logged_in()) {
            redirect('admin');
        }
    }
}