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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->integer('userid');
            $table->integer('student_id');
            $table->integer('yearstudy_id');
            $table->integer('classroom_id');
            $table->integer('tuition_id');
            $table->string('month');
            $table->float('receive_amount')->comment('ຮັບເງິນ');
            $table->float('return_amount')->comment('ທອນເງີນ');
            $table->float('over_amount')->comment('ຄ້າງຈ້າຍ');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
