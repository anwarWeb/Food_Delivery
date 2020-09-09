<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->user_id();
            $table->text("address1")->nullable();
            
            $table->text("address2")->nullable();
            $table->string("city")->nullable();

            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->string("zip")->nullable();
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
        //
        Schema::dropIfExists('address');
    }
}
