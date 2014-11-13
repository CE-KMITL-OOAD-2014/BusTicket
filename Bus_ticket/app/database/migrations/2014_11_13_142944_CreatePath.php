<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePath extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('paths', function($table){
            $table->increments('id');
            $table->string('source', 50)->nullable(false);
            $table->string('destination' , 50)->nullable(false);
            $table->string('timego' , 30)->nullable(false);
            $table->string('timeto' ,30)->nullable(false); 
            $table->integer('money'); 
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
		Schema::drop('paths');
	}


}
?>