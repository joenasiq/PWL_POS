<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'ELC',
                'kategori_nama' => 'Elektronik',
                'created_at' => now()
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'FNB',
                'kategori_nama' => 'Food & Beverage',
                'created_at' => now()
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'BKH',
                'kategori_nama' => 'Buku & Alat Tulis',
                'created_at' => now()
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'FSN',
                'kategori_nama' => 'Fashion',
                'created_at' => now()
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'KSR',
                'kategori_nama' => 'Kosmetik',
                'created_at' => now()
            ],
        ];
        
        DB::table('m_kategori')->insert($data);
    }
}
