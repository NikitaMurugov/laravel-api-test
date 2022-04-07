<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('s_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('age')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->nullable()->default(false);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@mysite.ru',
            'password' => Hash::make('admin01'),
            'is_admin' => true,
        ]);
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
