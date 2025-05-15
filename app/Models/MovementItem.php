<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementItem extends Model
{
    use HasFactory;

    protected $table = 'tbl_movement_item'; // karena pakai nama tabel kustom
    protected $primaryKey = 'movement_id';

    protected $fillable = [
        'item_id',
        'movement_type',
        'id',
        'quantity',
        'movement_date',
        'notes',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'item_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
