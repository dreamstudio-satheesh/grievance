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
        Schema::create('dstreets', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('division_id');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dstreets');
    }
};
