<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vessel extends Model
{

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['id', 'imo', 'name', 'email'];

    /**
     * Disabel Eloquent timestamps
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get Reports assigned to Vessel
     */
    public function reports() {
        return $this->hasMany('App\Report');
    }

}
