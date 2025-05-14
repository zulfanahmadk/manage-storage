<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['item_id' => 1, 'nama_item' => 'Pensil 2B', 'deskripsi' => 'Pensil standar untuk menulis', 'stock' => 150, 'unit' => 'pcs'],
            ['item_id' => 2, 'nama_item' => 'Penghapus', 'deskripsi' => 'Penghapus karet putih', 'stock' => 80, 'unit' => 'pcs'],
            ['item_id' => 3, 'nama_item' => 'Bolpoin Biru', 'deskripsi' => 'Pulpen tinta biru', 'stock' => 120, 'unit' => 'pcs'],
            ['item_id' => 4, 'nama_item' => 'Bolpoin Merah', 'deskripsi' => 'Pulpen tinta merah', 'stock' => 100, 'unit' => 'pcs'],
            ['item_id' => 5, 'nama_item' => 'Spidol Hitam', 'deskripsi' => 'Spidol papan tulis warna hitam', 'stock' => 50, 'unit' => 'pcs'],
            ['item_id' => 6, 'nama_item' => 'Penggaris 30cm', 'deskripsi' => 'Penggaris plastik 30 cm', 'stock' => 60, 'unit' => 'pcs'],
            ['item_id' => 7, 'nama_item' => 'Map Plastik', 'deskripsi' => 'Map untuk dokumen', 'stock' => 70, 'unit' => 'pcs'],
            ['item_id' => 8, 'nama_item' => 'Kertas A4', 'deskripsi' => 'Kertas ukuran A4 80 gsm', 'stock' => 500, 'unit' => 'lembar'],
            ['item_id' => 9, 'nama_item' => 'Binder Clip', 'deskripsi' => 'Binder clip ukuran kecil', 'stock' => 200, 'unit' => 'pcs'],
            ['item_id' => 10, 'nama_item' => 'Stapler Mini', 'deskripsi' => 'Stapler ukuran kecil', 'stock' => 30, 'unit' => 'pcs'],
            ['item_id' => 11, 'nama_item' => 'Isi Staples', 'deskripsi' => 'Isi staples ukuran 10', 'stock' => 300, 'unit' => 'box'],
            ['item_id' => 12, 'nama_item' => 'Lakban Bening', 'deskripsi' => 'Lakban untuk pengepakan', 'stock' => 40, 'unit' => 'roll'],
            ['item_id' => 13, 'nama_item' => 'Gunting Kertas', 'deskripsi' => 'Gunting ukuran sedang', 'stock' => 25, 'unit' => 'pcs'],
            ['item_id' => 14, 'nama_item' => 'Kalkulator', 'deskripsi' => 'Kalkulator kantor standar', 'stock' => 10, 'unit' => 'pcs'],
            ['item_id' => 15, 'nama_item' => 'Memo Pad', 'deskripsi' => 'Memo kecil untuk catatan', 'stock' => 85, 'unit' => 'pcs'],
            ['item_id' => 16, 'nama_item' => 'Sticky Notes', 'deskripsi' => 'Sticky notes warna-warni', 'stock' => 100, 'unit' => 'pcs'],
            ['item_id' => 17, 'nama_item' => 'Tipe-X', 'deskripsi' => 'Penghapus tinta cair', 'stock' => 90, 'unit' => 'pcs'],
            ['item_id' => 18, 'nama_item' => 'Flashdisk 16GB', 'deskripsi' => 'Media penyimpanan USB', 'stock' => 20, 'unit' => 'pcs'],
            ['item_id' => 19, 'nama_item' => 'Kertas HVS F4', 'deskripsi' => 'Kertas F4 untuk dokumen', 'stock' => 400, 'unit' => 'lembar'],
            ['item_id' => 20, 'nama_item' => 'Amplop Coklat', 'deskripsi' => 'Amplop besar untuk dokumen', 'stock' => 60, 'unit' => 'pcs'],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
