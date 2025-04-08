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
    Schema::table('posts', function (Blueprint $table) {
      $table->string('slug', 254)->unique()->after('title');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('posts', function (Blueprint $table) {
      $table->dropUnique(['slug']);
      $table->dropColumn('slug');
    });
  }

};
