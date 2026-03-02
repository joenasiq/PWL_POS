<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'TV001',
                'barang_nama' => 'Televisi 32 Inch',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
                'created_at' => now()
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'KUL001',
                'barang_nama' => 'Kulkas 2 Pintu',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
                'created_at' => now()
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'SOS001',
                'barang_nama' => 'Sosis Sapi',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'created_at' => now()
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MIE001',
                'barang_nama' => 'Mie Instan Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3500,
                'created_at' => now()
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BUK001',
                'barang_nama' => 'Buku Tulis 38 Lembar',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'created_at' => now()
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'PUL001',
                'barang_nama' => 'Pulpen Standard',
                'harga_beli' => 2000,
                'harga_jual' => 3500,
                'created_at' => now()
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'KAE001',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 40000,
                'harga_jual' => 60000,
                'created_at' => now()
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'CEL001',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'created_at' => now()
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'LIP001',
                'barang_nama' => 'Lipstik',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
                'created_at' => now()
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'FAC001',
                'barang_nama' => 'Face Wash',
                'harga_beli' => 20000,
                'harga_jual' => 35000,
                'created_at' => now()
            ],
        ];
        
        DB::table('m_barang')->insert($data);
    }
}
