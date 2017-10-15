<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {
    public function index()
    {
        $data['title'] = 'PHP Info Page';
        $this->load->view('header', $data);
        $this->load->view('info');
        $this->load->view('footer');
    }
}
