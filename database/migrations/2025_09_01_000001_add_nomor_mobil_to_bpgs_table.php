<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bpgs', function (Blueprint $table) {
            $table->string('nomor_mobil')->after('supplier');
        });
    }

    public function down(): void
    {
        Schema::table('bpgs', function (Blueprint $table) {
            $table->dropColumn('nomor_mobil');
        });
    }
};
