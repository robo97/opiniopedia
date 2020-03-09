<?php namespace RoBotron\Opiniopedia\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOpiniosTable extends Migration
{
    public function up()
    {
        Schema::create('robotron_opiniopedia_opinios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('robotron_opiniopedia_opinios');
    }
}
