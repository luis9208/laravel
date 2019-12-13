<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cargo');
            $table->text('perfil');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            //relations
            $table->foreign('user_id')->references('id')->on('Users')
                ->delete('cascade')
                ->update('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums');
    }
}
