<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreatePersonalAccessTokensTable extends Migration
=======
return new class extends Migration
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
=======
            $table->id();
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
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
        Schema::dropIfExists('personal_access_tokens');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
