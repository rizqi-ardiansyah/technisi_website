<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateUsersTable extends Migration
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< HEAD
            $table->boolean('is_admin')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
=======
            $table->string('email')->unique();
            $table->string('username', 100);
            $table->string('phone', 25);
            $table->unsignedBigInteger('id_role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_role')->references('id')->on('role')->cascadeOnDelete();
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
