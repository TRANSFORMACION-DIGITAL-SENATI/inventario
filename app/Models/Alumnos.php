<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //
    //use HasFactory;

    /**
     * The table associated with the model.
     * Williams Roberts Jara Daza
     */
    protected $table = 'alumnos';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'fecha_nacimiento',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    /**
     * Get the full name of the student.
     */
    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apellido}";
    }
}
