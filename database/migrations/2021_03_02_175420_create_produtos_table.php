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
            $table->id();
            $table->string('PRO_NOME', 75);
            $table->string('PRO_DESCRICAO', 250);
            $table->integer('PRO_PRECOCOMPRA');
            $table->integer('PRO_PRECOVENDA');
            $table->integer('PRO_QUANTIDADE');
            $table->integer('PRO_FOR_CODIGO');
            $table->string('updated_at');
            $table->string('created_at');
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
