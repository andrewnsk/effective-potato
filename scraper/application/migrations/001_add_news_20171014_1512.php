<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_news_20171014_1512 extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'news_id' => array(
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'counter' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => FALSE
            ),
            'news_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'img' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            ),
            'news_content' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('news_id', TRUE);
        $this->dbforge->create_table('news');
    }

    public function down()
    {
        $this->dbforge->drop_table('news');
    }
}
