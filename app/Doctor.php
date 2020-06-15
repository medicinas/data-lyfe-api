<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $doc_id
 * @property int $doc_localion
 * @property string $doc_email
 * @property string $doc_name
 * @property string $doc_last_p
 * @property string $doc_last_m
 * @property string $doc_status
 * @property Location $location
 * @property Patient[] $patients
 */
class Doctor extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'doctor';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'doc_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['doc_localion', 'doc_email', 'doc_name', 'doc_last_p', 'doc_last_m', 'doc_status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Location', 'doc_localion', 'loc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patients()
    {
        return $this->hasMany('App\Patient', 'pa_doctor', 'doc_id');
    }
}
