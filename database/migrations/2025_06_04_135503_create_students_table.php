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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthday');
            $table->string('ethnic');
            $table->integer('village_id');
            $table->integer('district_id');
            $table->integer('province_id');
            $table->string('mother');
            $table->string('m_phone');
            $table->string('m_occupation');
            $table->string('father');
            $table->string('f_phone');
            $table->string('f_occupation');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
