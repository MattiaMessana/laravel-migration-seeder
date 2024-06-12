<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 'date_ticket' DATE NOT NULL
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->date('date_ticket')->after('company');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('date_ticket');
        });
    }
};
