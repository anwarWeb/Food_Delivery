<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->integer('user_id');
            $table->integer( 'price' );
            $table->integer( 'quantity' )->default(1);
            
            $table->timestamps();

            $table->integer('subtotal')->nullable();          
            $table->integer('tax')->nullable();
            $table->integer('Discount')->nullable();
    
            $table->integer('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
