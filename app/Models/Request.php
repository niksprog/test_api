<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'body',
        'ip',
        'status',
        'table',
        'format'
    ];

    public static function boot()
    {
        parent::boot();

        Request::created(function (Request $request) {
            $request->update([
                'user_name'=>$request->user->name
            ]);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
