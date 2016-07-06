<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_fields', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->char('fieldName', 20);
                        $table->char('fieldType', 10);
                        $table->integer('entityId');
                        $table->unique( array('fieldName','entityId') );
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custom_fields');
	}

}
