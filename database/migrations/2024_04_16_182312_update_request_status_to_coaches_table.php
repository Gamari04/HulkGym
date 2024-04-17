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
        Schema::table('coaches', function (Blueprint $table) {
            $table->enum('request_status', ['pending', 'accepted', 'rejected'])->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('coaches', function (Blueprint $table) {
            $table->dropColumn('request_status');
        });
    }
};