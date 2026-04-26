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
        Schema::create('mahasiswa', function (Blueprint $table) {
            //bagian ini diubah sesuai soal uts, misal soal uts minta bikin tabel isinya id, nama_produk, kode_produk, berarti isinya nanti
            // $table->id();
            // $table->string('nama_produk');
            // $table->string('kode_produk');
            $table->id();
            $table->string('nama'); //ini sesuaikan dengan app\model\mahasiswa.php (line 15)
            $table->string('NIM')->unique(); //ini sesuaikan dengan app\model\mahasiswa.php (line 16)
            $table->string('tanggal_lahir')->nullable(); //ini sesuaikan dengan app\model\mahasiswa.php (line 17)
            $table->string('tempat_lahir')->nullable(); //ini sesuaikan dengan app\model\mahasiswa.php (line 18) 
            $table->text('alamat'); //ini sesuaikan dengan app\model\mahasiswa.php (line 19)
            $table->string('asal'); //ini sesuaikan dengan app\model\mahasiswa.php (line 20)
            $table->string('id_jurusan'); //ini sesuaikan dengan app\model\mahasiswa.php (line 21)
            $table->timestamps();

            //unique berarti ga boleh ada data yang sama, misal pas isi form isinya 1234, maka saat isi form selanjutnya ga boleh 1234 lagi. klo next form isinya 1234, pasti error.
            //nullable = data tidak wajib diisi

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
