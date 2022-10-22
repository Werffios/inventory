<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Post
 *
 * @mixin Eloquent
 */
class Element extends Model
{
    use HasFactory;

    const STATUS_MOVABLE = 'Si';
    const STATUS_UNMOVABLE = 'No';

    protected $guarded = ['id'];

    public function scopeType($query, $type_id)
    {
        if ($type_id) {
            return $query->where('type_id', $type_id);
        }
    }
    public function scopeDependency($query, $dependency_id)
    {
        if ($dependency_id) {
            return $query->where('dependency_id', $dependency_id);
        }
    }
    public function scopeTrademark($query, $trademark_id)
    {
        if ($trademark_id) {
            return $query->where('trademark_id', $trademark_id);
        }
    }
    public function scopeUbication($query, $ubication_id)
    {
        if ($ubication_id) {
            return $query->where('ubication_id', $ubication_id);
        }
    }

    // Relación uno a muchos, inversa con dependencia
    public function dependency()
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
