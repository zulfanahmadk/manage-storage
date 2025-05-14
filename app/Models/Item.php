<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Nama tabel
    protected $table = 'tbl_item';

    // Primary key
    protected $primaryKey = 'item_id';

    // Jika primary key bukan auto-increment atau bukan integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'nama_item',
        'deskripsi',
        'stock',
        'unit',
    ];

    // (Optional) Jika tidak ingin menggunakan timestamps (created_at, updated_at)
    public $timestamps = true;
}
