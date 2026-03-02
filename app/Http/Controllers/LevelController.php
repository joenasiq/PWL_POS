<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        /*
        $data = [
            'level_kode' => 'CUS',
            'level_nama' => 'Pelanggan',
            'created_at' => now()
        ];
        
        DB::table('m_level')->insert($data);
        
        return 'Insert data baru berhasil';
        
        $row = DB::table('m_level')
        ->where('level_kode', 'CUS')
        ->update(['level_nama' => 'Customer']);
    
        return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        $row = DB::table('m_level')
        ->where('level_kode', 'CUS')
        ->delete();
    
        return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';
        */
        $data = DB::table('m_level')->get();
    
        return view('level', ['data' => $data]);
        }
}
