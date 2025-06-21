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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('birthday');
            $table->string('single');
            $table->string('ethnic');
            $table->string('phones');
            $table->integer('weight');
            $table->integer('height');
            $table->string('clothes_size');
            $table->integer('province');
            $table->integer('district');
            $table->integer('village');
            $table->integer('active');
            $table->text('img')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
