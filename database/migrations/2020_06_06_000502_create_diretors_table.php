<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiretorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diretors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_diretor');
            $table->integer('filme_id')->unsigned();
            $table->foreign('filme_id')->references('id')->on('filmes')->onDelete('cascade');  
            $table->softDeletes();
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
        Schema::dropIfExists('diretors');
    }
}
