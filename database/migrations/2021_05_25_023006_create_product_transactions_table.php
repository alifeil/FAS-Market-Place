<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Grammars\MySqlGrammar;

class CreateProductTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('product_transactions', function (Blueprint $table) {
                $table->foreignId('transaction_id')->constrained();
                $table->foreignId('product_id')->constrained();
                $table->unsignedInteger('price');
                $table->unsignedInteger('quantity');
                $table->primary(['transaction_id', 'product_id']);
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
        Schema::dropIfExists('product_transactions');
    }
}
