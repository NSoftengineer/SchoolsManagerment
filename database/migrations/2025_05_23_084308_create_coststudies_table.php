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
        Schema::create('coststudies', function (Blueprint $table) {
            $table->id();
            $table->integer('classrooms_id')->comment('ລະຫັດຫ້ອງຮຽນ');
            $table->integer('yearstudies_id')->comment('ລະຫັດສົກຮຽນ');
            $table->integer('groupitems_id')->comment('ລະຫັດກູ່ມລາຍການອຸປະກອນເສີມ');
            $table->float('price', 13, 2)->default(0)->comment('ຄ່າຮຽນ');
            $table->integer('type_payment')->default(0)->comment('ວີທີການຈ່າຍຄ່າຮຽນ 0 = ເປັນເດືອນ, 1 = ເປັນພາກຮຽນ, 2 = ເປັນເດືອນ ແລະ ເປັນພາກຮຽນ');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coststudies');
    }
};
