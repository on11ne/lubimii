<?php

class m120729_160916_alter_news_status extends CDbMigration
{
	public function up()
	{
        $this->alterColumn("tbl_news", "status", "tinyint(2) NOT NULL");
	}

	public function down()
	{
		echo "m120729_160916_alter_news_status does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}