<?php

namespace Fuel\Migrations;

class Create_bbs
{
	public function up()
	{
		\DBUtil::create_table('bbs', array(
			'id' => array('type' => 'integer primary key', 'autoincrement' => true),
			'post_date' => array('type' => 'text'),
			'message' => array('type' => 'text'),
			'created_at' => array('type' => 'integer', 'null' => true),
			'updated_at' => array('type' => 'integer', 'null' => true),
		));
	}

	public function down()
	{
		\DBUtil::drop_table('bbs');
	}
}