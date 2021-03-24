<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = true;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tarifas';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */


    protected $fillable = [
        'nombre',
        'descripcion',
        'lat_ini',
        'long_ini',
        'lat_fin',
        'long_fin'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buses()
    {
        return $this->hasMany('App\Models\bus', 'id_ruta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tramos()
    {
        return $this->hasMany('App\Models\tramo', 'id_ruta');
    }
}
