<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $loc_id
 * @property string $loc_name
 * @property string $loc_address
 * @property string $loc_phone
 * @property Doctor[] $doctors
 */
class Location extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'location';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'loc_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['loc_name', 'loc_address', 'loc_phone'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany('App\Doctor', 'doc_localion', 'loc_id');
    }
}
