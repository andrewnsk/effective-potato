<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_news_20180412_0831 extends CI_Migration {

    public function up()
    {
        $fields = array(

            'img' => array(
                'type' => 'VARCHAR',
                'constraint' => '500',
            )

        );
        $this->dbforge->add_column('news', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_table('news');
    }
}
