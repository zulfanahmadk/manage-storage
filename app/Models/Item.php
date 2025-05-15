<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'tbl_item';
    protected $primaryKey = 'item_id';

    protected $fillable = [
        'nama_item',
        'deskripsi',
        'stock',
        'unit',
    ];

    public function movements()
    {
        return $this->hasMany(MovementItem::class, 'item_id', 'item_id');
    }
}
