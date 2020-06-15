<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $pa_id
 * @property int $pa_doctor
 * @property string $pa_email
 * @property string $pa_name
 * @property string $pa_last_p
 * @property string $pa_last_m
 * @property string $pa_status
 * @property Doctor $doctor
 * @property RecordPac[] $recordPacs
 */
class Patient extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'patient';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'pa_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['pa_doctor', 'pa_email', 'pa_name', 'pa_last_p', 'pa_last_m', 'pa_status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor()
    {
        return $this->belongsTo('App\Doctor', 'pa_doctor', 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recordPacs()
    {
        return $this->hasMany('App\RecordPac', 'rec_patient', 'pa_id');
    }
}
