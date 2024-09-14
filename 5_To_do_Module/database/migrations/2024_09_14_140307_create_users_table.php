<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id column (auto-increment)
            $table->string('name')->comment('User name'); // name column
            $table->string('email')->unique()->comment('User email'); // email column (unique)
            $table->integer('age')->nullable()->comment('User age'); // age column (nullable)
            $table->string('city')->nullable()->comment('City where the user lives'); // city column (nullable)

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
}
