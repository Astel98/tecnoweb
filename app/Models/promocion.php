<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promocion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = true;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'promocions';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */


    protected $fillable = [
        'nombre',
        'descripcion',
        'descuento',
        'id_tarifa'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tarifa()
    {
        return $this->belongsTo('App\Models\tarifa', 'id_tarifa');
    }

}
