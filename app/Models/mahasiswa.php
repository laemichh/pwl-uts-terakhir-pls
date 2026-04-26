<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mahasiswa extends Model /**ini yang tadi dicontroller bilang sesuaikan dengan model, jadi klo ini misal class barang extends model, maka di mahasiswacontroller harus barang juga*/
{
    use HasFactory;

    protected $table = 'mahasiswa'; /** 1. ini sesuaikan dengan database\migrations\mahasiswa.php bagian Schema::create('mahasiswa', function (Blueprint $table). jadi klo dimigrations tulisnya Schema::create('produk', function (Blueprint $table), maka disin ubah jadi protected $tables='produk'; 2. ini yang tadi dicontroller bilang sesuaikan dengan model, jadi klo ini misal protected $table='barang'; , maka di mahasiswacontroller harus barang juga*/

    protected $fillable = [
        'nama',/**sesuaikan dengan database\migration\mahasiswa.php (line 20)*/
        'NIM',/**sesuaikan dengan database\migration\mahasiswa.php (line 21)*/
        'tanggal_lahir',/**sesuaikan dengan database\migration\mahasiswa.php (line 22)*/
        'tempat_lahir',/**sesuaikan dengan database\migration\mahasiswa.php (line 23)*/
        'alamat',/**sesuaikan dengan database\migration\mahasiswa.php (line 24)*/
        'asal',/**sesuaikan dengan database\migration\mahasiswa.php (line 25)*/
        'id_jurusan',/**sesuaikan dengan database\migration\mahasiswa.php (line 26)*/
    ];
}
