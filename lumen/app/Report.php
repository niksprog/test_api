<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'vessel_id', 'created_on', 'conditionType', 'meHours', 'meCons',
        'auxHours', 'auxCons', 'observedDistance'
    ];

    /**
     * Disabel Eloquent timestamps
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Vessel that owns the Report.
     */
    public function vessel() {
        return $this->belongsTo('App\Vessel');
    }

}
