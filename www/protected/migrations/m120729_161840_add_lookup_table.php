<?php

class m120729_161840_add_lookup_table extends CDbMigration
{
	public function up()
	{
        $this->createTable("tbl_lookup", array(
            "id" => "pk",
            "name" => "string not null",
            "code" => "integer not null",
            "type" => "string not null",
            "position" => "integer"
        ));
	}

	public function down()
	{
		$this->dropTable("tbl_lookup");
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