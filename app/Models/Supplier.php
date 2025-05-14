<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'tbl_supplier';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_supplier',
        'kontak_supplier',
        'alamat',
    ];

    // Jika kolom id tidak menggunakan 'id' standar, kita bisa tentukan di sini
    protected $primaryKey = 'supplier_id';

    // Jika kolom id tidak auto-increment
    public $incrementing = true;

    // Tentukan tipe data kolom id
    protected $keyType = 'int';

    // Jika tabel tidak menggunakan timestamps, bisa dimatikan
    public $timestamps = true;
}
