<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('parent_id')->unsigned(); //wtf
            $table->string('name');
            $table->integer('user_id')->unsigned(); //
            

            $table->timestamps();

            //relaciones
            $table->foreign('parent_id')->references('id')->on('directories')->onDelete('cascade')->onUpdate('cascade');

           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directories');
    }
}
