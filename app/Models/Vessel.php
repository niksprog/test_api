<?php

namespace App;

use Ifnot\ApiFiltering\Eloquent\Traits\CanBeFiltered;
use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
{
    protected $fillable = [
        'name',
        'email',
        'imo',
    ];

    /**
     * @Relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany(Report::class,'imo','imo');
    }
}
