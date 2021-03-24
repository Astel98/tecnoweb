<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tramo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = true;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tramos';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */


    protected $fillable = [
        'nombre',
        'descripcion',
        'id_ruta'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ruta()
    {
        return $this->belongsTo('App\Models\ruta', 'id_ruta');
    }
}
