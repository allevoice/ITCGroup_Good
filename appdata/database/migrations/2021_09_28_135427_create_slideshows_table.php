<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slideshows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('indice_lg')->nullable();
            $table->string('titleview', 100);
            $table->text('imgslide');
            $table->text('imglogo');
            $table->text('contentsd');
            $table->text('link')->nullable();
            $table->integer('status')->nullable();
            $table->integer('level')->nullable();
            $table->softDeletes()->nullable();
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
        Schema::dropIfExists('slideshows');
    }
}
