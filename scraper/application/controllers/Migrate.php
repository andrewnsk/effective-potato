<?php

class Migrate extends CI_Controller
{

    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
        else {

            $data['title'] = 'Migrate';
            $this->load->view('header', $data);
            $this->load->view('migrate');
            $this->load->view('footer');
        }
    }

}
