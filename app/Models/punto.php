<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class punto extends Model
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
        'latitud',
        'longitud',
        'id_tramo'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tramo()
    {
        return $this->belongsTo('App\Models\tramo', 'id_tramo');
    }
}
