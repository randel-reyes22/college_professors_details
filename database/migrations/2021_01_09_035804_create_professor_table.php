<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('professors')) {
            Schema::create('professors', function (Blueprint $table) {
                $table->increments('id');
                $table->String('professor_id');
                $table->String('lastname');
                $table->String('firstname');
                $table->String('middlename');
                $table->String ('gender');
                $table->String('homeAddress');
                $table->String('contactNo');
                $table->String('department');
                
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
        Schema::dropIfExists('professors');
    }
}
