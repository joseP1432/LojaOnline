<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('PRO_CODIGO');
            $table->string('PRO_NOME', 75)->nullable();
            $table->string('PRO_DESCRICAO', 250)->nullable();
            $table->integer('PRO_PRECOCOMPRA')->nullable();
            $table->integer('PRO_PRECOVENDA')->nullable();
            $table->integer('PRO_QUANTIDADE')->nullable();
            $table->integer('PRO_FOR_CODIGO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
