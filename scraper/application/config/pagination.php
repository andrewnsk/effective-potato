<?php

$config['base_url'] = 'paginate_news';

$config['use_page_numbers'] = TRUE;
$config['page_query_string'] = TRUE;
$config['query_string_segment'] = 'page';

$config['per_page'] = 5;
$config['uri_segment'] = 1;
$config['display_pages'] = TRUE;


$config['first_link'] = 'First Page';
$config['last_link'] = 'Last Page';

$config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination">';
$config['full_tag_close'] 	= '</ul></nav></div>';
$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
$config['num_tag_close'] 	= '</span></li>';
$config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
$config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
$config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
$config['next_tag_close'] 	= '</span></li>';
$config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
$config['prev_tag_close'] 	= '</span></li>';
$config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
$config['first_tag_close'] = '</span></li>';
$config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
$config['last_tag_close'] 	= '</span></li>';
