<?php
class Paginate_news extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        // load Pagination library
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = array();
        $total_records = $this->news_model->count_all_news();

        // load config file
        $this->config->load('pagination', TRUE);
        $settings = $this->config->item('pagination');
        $settings['total_rows'] = $this->news_model->count_all_news();
        $page = (empty($_GET['page'])) ? 0 : $_GET['page'];

        if ($total_records > 0)
        {
            // get current page records

            if ($page == 0) {
                $offset = 0;
            } elseif ($page > 0) {
                $offset = ($page * $settings['per_page']) - $settings['per_page'];
            }
            $data["news"] = $this->news_model->get_news($settings['per_page'], $offset);

            // use the settings to initialize the library
            $this->pagination->initialize($settings);

            // build paging links
            $data["links"] = $this->pagination->create_links();
        }

        $data['title'] = 'News';
        $this->load->view('header', $data);
        $this->load->view('paginate_news', $data);
        $this->load->view('footer');
    }
}
