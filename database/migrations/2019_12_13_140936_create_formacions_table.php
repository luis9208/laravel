<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacions', function (Blueprint $table) {
            $table->id();
            $table->enum('level', [
                'TECNICO','TECNOLOGO','PROFESIONAL',
                'DIPLOMADO','ESPECIALIZACION','MAESTRIA','Doctorado', 
            ]);
            $table->string('title');
            $table->string('year');
            $table->bigInteger('id_user')->unsigned();
            $table->timestamps();

            //relations
            $table->foreign('id_user')->references('id')->on('Users')
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
        Schema::dropIfExists('formacions');
    }
}
