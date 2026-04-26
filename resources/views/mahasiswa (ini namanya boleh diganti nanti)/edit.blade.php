<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit</title>
    @include ('components.boostrap')
</head>
<body>
    <div class="mt-3 mx-3">

    <form action="{{ action([App\Http\Controllers\mahasiswaController::class/** ini sesuaikan dengan controllernya, misal controllernya ProdukController maka ini ubah jadi action([App\Http\Controllers\ProdukController::class */, 'update'], [$mahasiswa/** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */}->id]) }}"  method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
      <div class="mb-3">
    <label>Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" value="{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */} ->nama /** ini sesauikan dengan app\model\mahasiswa.php (line 15 ) */}}">
  </div>
  <div class="mb-3">
    <label>NIM</label>
    <input type="text" class="form-control" name="NIM" value="{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */} ->NIM /** ini sesauikan dengan app\model\mahasiswa.php (line 16 ) */}}">
  </div>
  <div class="mb-3">
    <label>Tanggal Lahir</label>
    <input type="text" class="form-control" name="tanggal_lahir" value="{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */} ->tanggal_lahir /** ini sesauikan dengan app\model\mahasiswa.php (line 17 ) */}}">
  </div>
  <div class="mb-3">
    <label>Tempat Lahir</label>
    <input type="text" class="form-control" name="tempat_lahir" value="{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */} ->tempat_lahir /** ini sesauikan dengan app\model\mahasiswa.php (line 18 ) */}}">
  </div>

  <div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control">{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */->alamat /** ini sesauikan dengan app\model\mahasiswa.php (line 19 ) */}}</textarea>
  </div>

  <div class="mb-3">
    <label>Asal SMA/SMK</label>
    <input type="text" class="form-control" name="asal" value="{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */} ->asal /** ini sesauikan dengan app\model\mahasiswa.php (line 20 ) */}}">
  </div>
  <div class="mb-3">
    <label>ID Jurusan</label>
    <input type="text" class="form-control" name="id_jurusan" value="{{$mahasiswa /** ini sesuaikan dengan controller line 68, jadi klo di line 68 tulisannya produk::find($id), maka bagian ini ubah jadi $produk */} ->id_jurusan /** ini sesauikan dengan app\model\mahasiswa.php (line 21 ) */}}">
  </div>

    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
  <button type="reset" class="btn btn-danger" value="Reset">Reset</button>

   </div>
</form>
</body>
</html>
