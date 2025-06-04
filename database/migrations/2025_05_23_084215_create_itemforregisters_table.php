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
        Schema::create('itemforregisters', function (Blueprint $table) {
            $table->id();
            $table->integer('groupitems_id')->comment('ລະຫັດກຸ່ມລາຍການເສີ່ມ');
            $table->string('name');
            $table->float('price', 13, 2)->default(0);
            $table->integer('default')->default(0)->comment('default 0 = ເລືອກກະໄດ-ບໍ່ເລືອກກະໄດ້, 1 = ຕ້ອງເລືອກເທົ່ານັ້ນ');
            $table->integer('type_items')->default(0)->comment('type_items 0 = ທົ່ວໄປ, 1 = ສ່ວນລົດ');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itemforregisters');
    }
};
