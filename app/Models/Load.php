<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;

    public function agencieses() {
        return $this->belongsTo('App\Models\Agency', 'agencies');
    }
}
