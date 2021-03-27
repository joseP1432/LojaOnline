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
            $table->string('PRO_STATUS', 250);
            $table->string('PRO_DESCRICAO', 250);
            $table->double('PRO_PRECOCOMPRA');
            $table->double('PRO_PRECOVENDA');
            $table->integer('PRO_QUANTIDADE');
            $table->UnsignedBigInteger('PRO_FOR_CODIGO');
            $table->foreign('PRO_FOR_CODIGO')->references('id')->on('fornecedors');
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
        Schema::dropIfExists('produtos');
    }
}
