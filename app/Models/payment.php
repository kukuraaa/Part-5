<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $guarded = ['id'];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'reservation_id');
    }
}
