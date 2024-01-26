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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->String('customerNmae');
            $table->String('handphone');
            $table->String('alamat');
            $table->String('patokan');
            $table->String('kabupaten');
            $table->String('provinsi');
            $table->String('size');
            $table->Integer('orderNumber');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
