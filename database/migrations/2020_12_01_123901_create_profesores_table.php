<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->bigIncrements('id_profesor');
            $table->char('tp_doc',3);
            $table->string('num_doc',15);
            $table->string('nombres',150);
            $table->string('apellidos',150);
            $table->integer('edad');
            $table->char('genero',1);
            $table->string('tel',15);
            $table->string('dir',150);
            $table->string('email',150);
            
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
        Schema::dropIfExists('profesores');
    }
}
