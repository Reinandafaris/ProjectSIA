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
    Schema::create('kas_keluar', function (Blueprint $table) {
      $table->id();
      $table->string('nokk', 10);
      $table->date('tglkk');
      $table->text('memokk');
      $table->double('jmkk');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('kas_keluar');
  }
};
