<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notif";
    protected $fillable = [
        'user_id','notif'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
