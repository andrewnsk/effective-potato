<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model{

    private function _get_news_data(){
        $this->db->select('*');
        $this->db->from('news');
    }

    public function get_news($limit, $start){
        $this->_get_news_data();
        $this->db->order_by('news_id', 'DESC' );
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_item_by_id($id){
        $this->_get_news_data();
        $this->db->where('news_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function increment_counter($id){
        $this->db->where('news_id', $id);
        $this->db->set('counter', 'counter'.'+1', FALSE);
        $this->db->update('news');

        return TRUE;
    }

    public function count_all_news(){
        $this->_get_news_data();
        $query = $this->db->count_all_results();
        return $query;
    }
}
