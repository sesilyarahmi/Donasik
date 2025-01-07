<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateZakatTable extends Migration
{
    public function up()
    {
        Schema::create('zakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('penghasilan', 15, 2);
            $table->decimal('thr_bonus', 15, 2)->nullable();
            $table->decimal('utang', 15, 2)->nullable();
            $table->decimal('cicilan', 15, 2)->nullable();
            $table->decimal('zakat', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zakat');
    }
}




