<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    // tampil data
    public function insert()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('crud.tampildata',['mahasiswa'=>$mahasiswa]);
    }
    public function dataadd()
    {
        return view('crud/tambahdata');
    }

    // tambah data 
    public function dataaddproses(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama_mahasiswa'        => $request->nama,
            'nim_mahasiswa'         => $request->nim,
            'kelas_mahasiswa'       => $request->kelas,
            'prodi_mahasiswa'       => $request->prodi,
            'fakultas_mahasiswa'    => $request->fakultas
        ]);
        return redirect('/dashboard')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }


    // edit data
    public function editdta($id)
    {
        $setdata = DB::table('mahasiswa')->where('id', $id)->first();
        return view('crud/edit', compact('setdata'));
    }

    public function editdataproses(Request $request, $id)
        {
            DB::table('mahasiswa')->where('id', $id)
            ->update([
                'nama_mahasiswa'        => $request->nama,
                'nim_mahasiswa'         => $request->nim,
                'kelas_mahasiswa'       => $request->kelas,
                'prodi_mahasiswa'       => $request->prodi,
                'fakultas_mahasiswa'    => $request->fakultas
            ]);
            return redirect('/dashboard')->with('status', 'Data Mahasiswa Berhasil Diubah!');
        }


    //hapus data
    public function hapusdta($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/dashboard')->with('status', 'Data Telah Dihapus!');
    }
}
