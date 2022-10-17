<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    const STATUS_MOVABLE = '1';
    const STATUS_UNMOVABLE = '0';


    protected $guarded = ['id'];


    // Relación uno a muchos, inversa con dependencia
    public function dependencie()
    {
        return $this->belongsTo('App\Models\Dependency');
    }
    // Relación uno a muchos, inversa con marca
    public function trademark()
    {
        return $this->belongsTo('App\Models\Trademark');
    }
    // Relación uno a muchos, inversa con tipo
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
    // Relación uno a muchos, inversa con ubicación
    public function ubication()
    {
        return $this->belongsTo('App\Models\Ubication');
    }
}
