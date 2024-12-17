<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
    
    // Relasi dengan tabel Reservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
