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
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('trans_id');
            $table->enum('level', ['Ringan', 'Sedang', 'Berat']);
            $table->text('description');
            $table->float('price');
            $table->enum('status', ['Order', 'Pickup', 'On Service', 'Complete', 'Failed']);
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('id_technician');
            $table->timestamps();

            $table->foreign('customer_id')->references('cust_id')->on('customer');
            $table->foreign('id_technician')->references('technician_id')->on('technician');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
