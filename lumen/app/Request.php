<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'user_id', 'path', 'body', 'created_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     * @var array
     */
    protected $hidden = ['response'];

    /**
     * Disabel Eloquent timestamps
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the User that owns the Request.
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

}
