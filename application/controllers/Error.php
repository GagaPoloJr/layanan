<?php
defined('BASEPATH') or exit('No direct script access allowes');

class Error extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('LoginModel');
    }
    public function index()
    {
       $this->output->set_status_header('404');
       $this->load->view('notfound');
    }
}