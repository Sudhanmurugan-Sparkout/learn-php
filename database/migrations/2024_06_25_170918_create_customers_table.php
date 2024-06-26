<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            if(!Schema::hasTable('customers')){
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('password');
                $table->float('total_product_price');
                $table->float('gst_amount');
                $table->float('discount');
                $table->float('final_price');
                $table->integer('order_id');
                $table->timestamps();
            }
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
