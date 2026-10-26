<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $guarded = ['id'];
    public function reservasis()
    {
        return $this->hasMany(Reservasi::class);
    }
}
