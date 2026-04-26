<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; /**ini sesuaikan dengan model, misal ini file ProdukController, ini diubah jadi use App\Models\Produk. begitu juga untuk file lainnya */
use Illuminate\Http\Request;

class mahasiswaController
{
    
    public function index()
    {
        #contoh: 'mahasiswa' => mahasiswa::all()
        #contoh: return mahasiswa::find($id)->blablabla
        #contoh: mahasiswa::find($id)
        #contoh: return redirect()->action([mahasiswaController ::class, 'index']);

        return view('mahasiswa.index', /**ini sesuaikan dengan nama folder dan file dalam folder tersebut, formatnya 
        return view ('nama_folder.nama_file'*/
        [
            'mahasiswa'/**ini sesuaikan dengan yang dimodel bagian, protected table(di model line 12). jadi kalau misal di model tulisnya protected $tables = 'barang', maka ini juga jadi 'barang' */ 
            => mahasiswa /**ini sesuaikan dengan model bagian, class blablabla extends mode(di model line 8). jadi kalau misal di model tulisnya class barang extends model, maka ini => barang */
            ::all() /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 13 */
        ]);
    }

    
    public function create()
    {
        return view('mahasiswa.edit' /**ini sesuaikan dengan nama folder dan file dalam folder tersebut, formatnya 
        return view ('nama_folder.nama_file'*/);
    }

    
    public function store(Request $request)
    {
        $data = $request->except('_token');

        mahasiswa/**ini sesuaikan dengan model bagian, class blablabla extends mode(di model line 8). jadi kalau misal di model tulisnya class barang extends model, maka ini => barang */
        ::create($data); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 13 */

        return redirect()->action([mahasiswaController /**ini sesuaikan dengan class mahasiswaController (line 8), jadi kalau misal dimodel tulisannya class produkController, maka ini menjadi return redirect()->action([produkController */
        ::class, 'index']); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 16 */
    }

    
    public function show($id)
    {
        return mahasiswa /**ini sesuaikan dengan model bagian, class blablabla extends mode(di model line 8). jadi kalau misal di model tulisnya class barang extends model, maka ini return barang */
        ::find($id); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 14 */
    }

    
    public function edit($id)
    {
        return view('mahasiswa.edit' , /**ini sesuaikan dengan nama folder dan file dalam folder tersebut, formatnya 
        return view ('nama_folder.nama_file'*/
        [
            'mahasiswa'/**ini sesuaikan dengan yang dimodel bagian, protected table(di model line 12). jadi kalau misal di model tulisnya protected $tables = 'barang', maka ini juga jadi 'barang' */ 
            => mahasiswa /**ini sesuaikan dengan model bagian, class blablabla extends mode(di model line 8). jadi kalau misal di model tulisnya class barang extends model, maka ini => barang */
            ::find($id) /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 13 */
        ]);
    }

    
    public function update(Request $request, $id)
    {
         $data = $request->except('_token');

        mahasiswa /**ini sesuaikan dengan model bagian, class blablabla extends mode(di model line 8). jadi kalau misal di model tulisnya class barang extends model, maka ini barang */
        ::find($id)->update($data); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 15 */

        return redirect()->action([mahasiswaController /**ini sesuaikan dengan class mahasiswaController (line 8), jadi kalau misal dimodel tulisannya class produkController, maka ini menjadi return redirect()->action([produkController */
        ::class, 'index']); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 16 */;
    }

    
    public function destroy($id)
    {
        mahasiswa /**ini sesuaikan dengan model bagian, class blablabla extends mode(di model line 8). jadi kalau misal di model tulisnya class barang extends model, maka ini barang */
        ::findOrFail($id)->delete(); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 15 */

        return redirect()->action([mahasiswaController /**ini sesuaikan dengan class mahasiswaController (line 8), jadi kalau misal dimodel tulisannya class produkController, maka ini menjadi return redirect()->action([produkController */
        ::class, 'index']); /**klo udah selesai nanti dihapus komennya lalu susun jadi seperti di contoh line 16 */
    }
}