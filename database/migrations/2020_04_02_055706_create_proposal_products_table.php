<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'proposal_products', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('proposal_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->string('tax', '50')->nullable();
            $table->float('discount')->default('0.00');
            $table->decimal('price', 16, 2)->default('0.0');
            $table->text('description')->nullable();
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal_products');
    }
}
