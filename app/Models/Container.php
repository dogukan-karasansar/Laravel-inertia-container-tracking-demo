<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $table = "containers";

    public function loads() {
        return $this->belongsTo('App\Models\Load', 'load');
    }

    public function ships() {
        return $this->belongsTo('App\Models\Ship', 'ship');
    }
}
