<?php
// migrations digunakan untuk membuat tabel brdsrkn model
// php artisan migrate == tambahkan tabel
// php artisan migrate:rollback === menghapus tabel
// php artisan migrate:fresh == menghapus dan menambahkan tabel baru
// seeders tmbhkn data
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->string('jenis');
            $table->text('deskripsi');
            $table->string('image');
            $table->timestamps();
        });
    }
    // timestamps akan scr otomatis menambahkan dua klom yaitu created_at dan update
    // yg akan digunakan untuk mlck wktu pembuatan dan pembaruan stiap entri dlm table
    /**
     * Reverse the migrations.
     */
    // down jika prlu melakukan rollback migrais,tabel "products" akan di hsp dri database
    // drop table yg dipanggil oleh rollback
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
