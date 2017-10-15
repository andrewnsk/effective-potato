<?php

class News_insert extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('news_insert_model');
    }
    function index() {
//Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


//Validating Email Field
        $this->form_validation->set_rules('news_title', 'news_title', 'required|min_length[1]|max_length[500]');

//Validating Mobile no. Field
        $this->form_validation->set_rules('url', 'url', 'required');

//Validating Address Field
        $this->form_validation->set_rules('news_content', 'news_content', 'required|min_length[1]|max_length[5000]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Add post';
            $this->load->view('header', $data);
            $this->load->view('News_insert');
            $this->load->view('footer');
        } else {
//Setting values for tabel columns
            $data = array(
                'counter' => 0,
                'news_title' => $this->input->post('news_title'),
                'url' => $this->input->post('url'),
                'news_content' => $this->input->post('news_content')
            );
//Transfering data to Model
            $this->news_insert_model->form_insert($data);
            $data['message'] = 'Data Inserted Successfully';
//Loading View
            $data['title'] = 'Add post';
            $this->load->view('header', $data);
            $this->load->view('News_insert', $data);
            $this->load->view('footer');
        }
    }

}
