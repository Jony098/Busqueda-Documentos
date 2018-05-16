<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');

            $table->string('url');
            $table->integer('directory_id')->unsigned(); //
            $table->integer('document_id')->unsigned(); //
            $table->string('mime'); //
            $table->string('size'); //


            $table->timestamps();


            //relaciones

           $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade')->onUpdate('cascade');

           $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade')->onUpdate('cascade');
           


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
