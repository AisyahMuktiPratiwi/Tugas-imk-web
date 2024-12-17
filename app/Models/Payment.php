<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'method', 
        'virtual_account', 
        'category', 
        'image',
    ];


    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

}
