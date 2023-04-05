<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use DB;
use App\Models\izin;

class IzinController extends Controller
{
    /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
    //memanpilkan
    $ar_izin = DB::table('izin')->get();
    return view('view.index',compact('ar_izin'));    }
=======
        $ar_izin = DB::table('izin')->get();
        return view('izin.index', compact('ar_izin'));
    }
>>>>>>> a28d4f963b57a26b0e3d853283cd55cee45ae623

    /* Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengarahkan ke hal form input buku
        // return view('kategori.form');
    }

    /* Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('izin')->insert(
            [
                'nama' => $request->nama,
                'jurusan_id' => $request->jurusan_id,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'tujuan' => $request->tujuan,
                'keperluan' => $request->keperluan,
                'jenis_izin_id' => $request->jenis_izin_id,
                'waktu_keluar' => $request->waktu_keluar,
                'waktu_kembali' => $request->waktu_kembali,
                
            ]
        );
        //Landing Page
        return redirect('/izin');
    }

    /* Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Menampilkan 
        // $ar_kategori = DB::table('kategori')
        //     ->where('kategori.id', '=', $id)
        //     ->get();
        // return view('kategori.show', compact('ar_kategori'));
    }

    /* Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = DB::table('kategori')
        //     ->where('id', '=', $id)->get();
        // return view('kategori.form_edit', compact('data'));
    }

    /* Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DB::table('kategori')->where('id', '=', $id)->update(
        //     [
        //         'nama' => $request->nama,
        //     ]
        // );
        // //Landing Page
        // return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data
        // DB::table('kategori')->where('id', $id)->delete();
        // return redirect('/kategori');
    }
}
