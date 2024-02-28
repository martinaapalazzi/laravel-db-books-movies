<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            // title -> varchar(64) NOT NULL
            $table->string('title', 64);

            // director -> varchar(64) NOT NULL
            $table->string('director', 64);

            // release_date -> varchar(64) NULL
            $table->date('release_date')->nullable();

            // nationality -> varchar(64) NULL
            $table->string('nationality', 64)->nullable();

            // genre -> varchar(64) NOT NULL
            $table->string('genre', 64);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
