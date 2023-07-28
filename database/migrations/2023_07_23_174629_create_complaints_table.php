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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('username');
            $table->string('email');
            $table->string('mobile');
            $table->string('doorno');
            $table->string('panchayat_id')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('street_id')->nullable();
            $table->string('division_id')->nullable();
            $table->string('dstreet_id')->nullable();
            $table->string('subject');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->string('priority');
            $table->string('status');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
