<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer( 'user_id' )->unsigned();
            $table->text("address1")->nullable();
            
            $table->text("address2")->nullable();
            $table->string("city")->nullable();

            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->string("zip")->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('addresses');
    }
}
