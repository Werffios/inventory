<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    // Relación uno a muchos
    public function elements()
    {
        return $this->hasMany('App\Models\Element');
    }
}
