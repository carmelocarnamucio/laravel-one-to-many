<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tasks', function (Blueprint $table) {

        $table -> foreign('employee_id', 'task-employee')
               -> references('id')
               -> on('employees');
      });

      Schema::table('task_typology', function (Blueprint $table) {

        $table -> foreign('task_id', 'tt_task')
               -> references('id')
               -> on('tasks');

        $table -> foreign('typology_id', 'tt_typology')
               -> references('id')
               -> on('typologies');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('tasks', function (Blueprint $table) {

        $table -> dropForeign('task-employee');

      });

      Schema::table('task_typology', function (Blueprint $table) {

        $table -> dropForeign('tt_typology');
        $table -> dropForeign('tt_task');

      });
    }
}
