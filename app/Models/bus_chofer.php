<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_chofer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = true;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bus_chofers';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */


    protected $fillable = [
        'id_bus',
        'id_chofer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bus()
    {
        return $this->belongsTo('App\Models\bus', 'id_bus');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chofer()
    {
        return $this->belongsTo('App\Models\chofer', 'id_chofer');
    }
}
