<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
        'area_id',
        'reservation_date',
        'total_guest',
        'time_slot',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);

}
}