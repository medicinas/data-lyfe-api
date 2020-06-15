<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $rec_id
 * @property int $rec_patient
 * @property string $rec_description
 * @property string $rec_date_enrollment
 * @property string $rec_date_reenrollment
 * @property Patient $patient
 */
class Record extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'record_pac';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'rec_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['rec_patient', 'rec_description', 'rec_date_enrollment', 'rec_date_reenrollment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient', 'rec_patient', 'pa_id');
    }
}
