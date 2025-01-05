<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Hapus tabel lama jika ada
        Schema::dropIfExists('donasis');

        // Buat tabel baru dengan struktur yang diinginkan
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_donasi'); // Barang atau Uang
            $table->string('nama_donatur');
            $table->string('info_kontak');
            $table->text('deskripsi')->nullable(); // Deskripsi donasi
            $table->decimal('jumlah', 10, 2)->nullable(); // Untuk donasi uang
            $table->string('nama_barang')->nullable(); // Untuk donasi barang
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel jika rollback dilakukan
        Schema::dropIfExists('donasis');
    }
}
