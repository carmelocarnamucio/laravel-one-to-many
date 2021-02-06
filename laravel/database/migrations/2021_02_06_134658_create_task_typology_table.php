<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTypologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('task_typology', function (Blueprint $table) {

        $table -> id();

        $table -> bigInteger('task_id')     -> unsigned();
        $table -> bigInteger('typology_id') -> unsigned();

        $table -> timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('task_typology');
    }
}
