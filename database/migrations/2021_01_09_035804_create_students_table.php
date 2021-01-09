<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
                $table->increments('id');
                $table->String('studentNo');
                $table->String('lastname');
                $table->String('firstname');
                $table->String('middlename');
                $table->String ('gender');
                $table->String('homeAddress');
                $table->String('contactNo');
                $table->String('course');
                $table->String('department');
                $table->unsignedInteger('year');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
