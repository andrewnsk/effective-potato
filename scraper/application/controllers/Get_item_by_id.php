<?php
class Get_item_by_id extends CI_Controller {

    public function index()
    {
        $data = array();
        $id = (empty($_GET['id'])) ? 1 : $_GET['id'];

        $this->news_model->increment_counter($id);

        $data['item'] = $this->news_model->get_item_by_id($id);
        $data['title'] = 'Detail';



        $this->load->view('header', $data);
        $this->load->view('detail', $data);
        $this->load->view('footer');
    }
}
