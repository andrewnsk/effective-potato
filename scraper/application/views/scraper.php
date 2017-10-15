<?php
/**
 * Created by PhpStorm.
 * User: smartgo
 * Date: 13.10.17
 * Time: 18:02
 */

function get_site_data($url, $max_depth = 1, $current_depth = 0){
    $current_depth++;

    $this->load->library('crawler');

    $site_data = array();

    if($this->crawler->set_url($url) !== false){
        $site_data['title'] = $this->crawler->get_title();
        $site_data['description'] = $this->crawler->get_description();
        $site_data['keywords'] = $this->crawler->get_keywords();
        $site_data['text'] = $this->crawler->get_text();
        $site_data['links'] = $this->crawler->get_links();

        if($current_depth <= $max_depth){
            foreach($site_data['links'] as $link_key => &$link){
                $link['data'] = get_site_data($link, $max_depth, $current_depth);
            }
        }
    }

    return $site_data;
}

$site_data = get_site_data("http://github.com", 1, 0);
echo $site_data;
