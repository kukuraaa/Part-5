<?php

namespace App\Models;

use Faker\Provider\Payment;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'reservation_id');
    }
}
