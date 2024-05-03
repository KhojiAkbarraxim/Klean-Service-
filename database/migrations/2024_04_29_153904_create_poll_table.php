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
        Schema::create('poll', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('proejct_name');
            $table->integer('great');
            $table->integer('good');
            $table->integer('acceptable');
            $table->integer('unacceptable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poll');
    }
};
