<?php

use Illuminate\Database\Migrations\Migration;

class AddToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
            Schema::create('users', function(Blueprint $table) {
                        $table->increments('id');
                        $table->string('first_name');
                        $table->string('username');
                        $table->string('email');
                        $table->string('password');
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
		Schema::drop('users');//
	}

}