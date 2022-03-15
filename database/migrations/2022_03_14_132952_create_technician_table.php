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
        Schema::create('technician', function (Blueprint $table) {
            $table->bigIncrements('technician_id');
            $table->unsignedBigInteger('specialist_id');
            $table->unsignedBigInteger('user_id');
            $table->string('certification', 225);
            $table->string('address', 225);
            $table->string('photos', 100)->nullable();
            $table->timestamps();

            $table->foreign('specialist_id')->references('id_specialist')->on('specialization');
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
        Schema::dropIfExists('technician');
    }
};
