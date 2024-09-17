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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->string('ghi_chu');
            $table->integer('so_luong')->default(0);
            $table->text('hinh_anh');
            $table->integer('tinh_trang');
            $table->integer('size');
            $table->integer('gia_up_size');
            $table->integer('gia_ban');
            $table->integer('gia_khuyen_mai')->nullable();
            $table->integer('id_danh_muc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
