<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Index</title>
     @include ('components.boostrap')
</head>
<body>
    <body class="mt-3 mx-5" bgcolor="grey" text="white">
        <a href="/"><button class="btn btn-info">Create</button></a>
        <table class="table table-hover mt-5">
            <thead>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Asal</th>
            <th>Id Jurusan</th>
            <th>Action</th>
            

        </thead>
        @foreach ($mahasiswa {{-- ini sesuaikan dengan app\http\controller\mahasiswaContoler (line 20) jadi klo ditulis nya 'produk', ini ubah jadi $produk --}}as $angka => $m)
        <tr>
            <td>{{$angka + 1}}</td>
            <td>{{$m->nama /** ini sesuaikan dengan app\model\mahasiswa.php (line 15) */ }}</td> 
            <td>{{$m->NIM /** ini sesuaikan dengan app\model\mahasiswa.php (line 16) */ }}</td> 
            <td>{{$m->tanggal_lahir /** ini sesuaikan dengan app\model\mahasiswa.php (line 17) */ }}</td> 
            <td>{{$m->tempat_lahir /** ini sesuaikan dengan app\model\mahasiswa.php (line 18) */ }}</td> 
            <td>{{$m->alamat /** ini sesuaikan dengan app\model\mahasiswa.php (line 19) */ }}</td> 
            <td>{{$m->asal /** ini sesuaikan dengan app\model\mahasiswa.php (line 20) */ }}</td> 
            <td>{{$m->id_jurusan /** ini sesuaikan dengan app\model\mahasiswa.php (line 21) */ }}</td> 
            <td>
                <div class="d-flex gap-1">
                <form action="{{ action([App\Http\Controllers\mahasiswaController::class /** ini sesuaikan dengan controllernya, misal controllernya ProdukController maka ini ubah jadi action([App\Http\Controllers\ProdukController::class */, 'destroy'], [$m->id]) }}"  method="post">
            @csrf @method('DELETE')
            <button class="btn btn-danger">Hapus</button>
        </form>
        <a href="{{ action([App\Http\Controllers\mahasiswaController::class /** ini sesuaikan dengan controllernya, misal controllernya ProdukController maka ini ubah jadi action([App\Http\Controllers\ProdukController::class */, 'edit'], [$m->id]) }}"  method="post"><button class="btn btn-warning">Edit</button></a>
            </div>
        </td>
        </tr>
        @endforeach
    </table>
</body>
</body>
</html>