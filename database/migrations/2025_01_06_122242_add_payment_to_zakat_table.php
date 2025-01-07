<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('zakat', function (Blueprint $table) {
            $table->unsignedBigInteger('panti_asuhan_id')->nullable()->after('zakat'); // Foreign key untuk panti asuhan
            $table->boolean('is_paid')->default(false)->after('panti_asuhan_id'); // Status pembayaran
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zakat', function (Blueprint $table) {
            //
        });
    }
};
