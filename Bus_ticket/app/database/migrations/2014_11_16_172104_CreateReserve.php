<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserve extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('reserves', function($table){
            $table->increments('id');

            $table->string('seat', 50)->nullable(false);
            $table->string('username' , 50)->nullable(false);
            $table->string('status' , 30)->nullable(false);

            $table->string('source', 50)->nullable(false);
            $table->string('destination' , 50)->nullable(false);
            $table->string('timego' , 30)->nullable(false);
            $table->string('timeto' ,30)->nullable(false); 
            $table->integer('money'); 
            $table->date('date')->nullable(false);
            $table->timestamps();
         });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
				Schema::drop('reserves');
		//
	}

}
