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
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('visa_no');
            $table->string('visa_exp_date');
            $table->string('nationality')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('passport_expiration_date')->nullable();
            $table->string('join_date')->nullable();
            $table->string('profession')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_qatar')->nullable();
            $table->string('phone_country')->nullable();
            $table->string('passport_address')->nullable();
            $table->string('Zone_no_address')->nullable();
            $table->string('Street_no_address')->nullable();
            $table->string('House_no_address')->nullable();
            $table->string('Unit_no_address')->nullable();
            $table->string('Reference_Person_Name')->nullable();
            $table->string('Reference_Person_Mobile_no')->nullable();
            $table->string('Salary_Information')->nullable();
            $table->string('Notification')->nullable();
            $table->string('Warning')->nullable();
            $table->string('Note')->nullable();
            $table->string('Documents')->nullable();
            $table->string('photo')->nullable();
            $table->string('qid_image')->nullable();
            $table->string('passport_image')->nullable();
            $table->string('labor_cont_image')->nullable();
            $table->string('other_image')->nullable();
            $table->string('sig_image')->nullable();
            $table->string('last_seen')->nullable();
            $table->enum('role',['admin','vendor','user'])->default('user');
            $table->string('email')->unique();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('address')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
