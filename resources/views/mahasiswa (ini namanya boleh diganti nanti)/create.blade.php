<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Create</title>
     @include ('components.boostrap')
</head>
<body class="mt-5 mx-5">
    <form action="{{ action([App\Http\Controllers\mahasiswaController::class /** ini sesuaikan dengan controllernya, misal controllernya ProdukController maka ini ubah jadi action([App\Http\Controllers\ProdukController::class */, 'store']) }}"  method="post">
        @csrf

  <div class="mb-3">
    <label>Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" {{-- ini sesuaikan dengan app\model\mahasiswa (line 15) --}}>
  </div>
  <div class="mb-3">
    <label>NIM</label>
    <input type="text" class="form-control" name="NIM" {{-- ini sesuaikan dengan app\model\mahasiswa (line 16) --}}>
  </div>
  <div class="mb-3">
    <label>Tanggal Lahir</label>
    <input type="text" class="form-control" name="tanggal_lahir" {{-- ini sesuaikan dengan app\model\mahasiswa (line 17) --}}>
  </div>
  <div class="mb-3">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir" {{-- ini sesuaikan dengan app\model\mahasiswa (line 18) --}}>
  </div>
  <div class="mb-3">
    <label>Alamat</label>
    <input type="text" class="form-control" name="alamat" {{-- ini sesuaikan dengan app\model\mahasiswa (line 19) --}}>
  </div>
  <div class="mb-3">
    <label>Asal SMA/SMK</label>
    <input type="text" class="form-control" name="asal" {{-- ini sesuaikan dengan app\model\mahasiswa (line 20) --}}>
  </div>
  <div class="mb-3">
    <label>ID Jurusan</label>
    <input type="text" class="form-control" name="id_jurusan" {{-- ini sesuaikan dengan app\model\mahasiswa (line 21) --}}>
  </div>

  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
  <button type="reset" class="btn btn-danger" value="Reset">Reset</button>

</form>

</body>
</html>