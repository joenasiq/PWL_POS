<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = rand(1, 10);
                $harga = [20000, 3500, 5000, 3500, 60000, 200000, 40000, 35000][rand(0, 7)];
                $jumlah = rand(1, 5);
                
                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => $jumlah,
                    'created_at' => now()
                ];
            }
        }
        
        DB::table('t_penjualan_detail')->insert($data);
    }
}
