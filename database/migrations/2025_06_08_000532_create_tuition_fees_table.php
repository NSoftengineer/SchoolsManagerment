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
        Schema::create('tuition_fees', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('invoice');
            $table->integer('student_id');
            $table->integer('yearstudy_id');
            $table->integer('classroom_id');
            $table->float('receive_amount', 13, 2)->comment('ຮັບເງິນ');
            $table->float('return_amount', 13, 2)->nullable()->comment('ທອນເງີນ');
            $table->float('over_amount', 13, 2)->nullable()->comment('ຄ້າງຈ້າຍ');
            $table->integer('payment')->comment('1:ຈ່າຍເງິນໂອນ, 2:ຈ່າຍເງິນສົດ');
            $table->integer('payment_of')->comment('0:ເດື່ອນ ຕໍ່ ເດືອນ, 1:ພາກຮຽນ I, 2:ພາກຮຽນ II, 3:ພາກຮຽນ I ແລະ ພາກຮຽນ II');
            $table->string('month')->comment('ເດືອນສຳຫລັບການຈ່າຍ');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuition_fees');
    }
};
