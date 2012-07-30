<?php

class m120729_173738_alter_news_change_images extends CDbMigration
{
	public function up()
	{
        $this->addColumn("tbl_news", "images", "text");
        $this->dropColumn("tbl_news", "image");
	}

	public function down()
	{
		echo "m120729_173738_alter_news_change_images does not support migration down.\n";
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