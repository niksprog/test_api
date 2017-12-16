<?php

namespace App;

use Ifnot\ApiFiltering\Eloquent\Traits\CanBeFiltered;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'imo',
        'created_on',
        'conditionType',
        'meHours',
        'meCons',
        'auxHours',
        'auxCons',
        'observedDistance',
    ];

    protected $casts = [
        'conditionType',
        'meHours'=>'integer',
        'meCons'=>'double',
        'auxHours'=>'integer',
        'auxCons'=>'double',
        'observedDistance'=>'double',
    ];

    public $timestamps = false;

    protected $dates = ['created_on'];

    /**
     * @Relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vessel()
    {
        return $this->belongsTo(Vessel::class,'imo','imo');
    }
}
