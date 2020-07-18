<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Tdl extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $guarded = ['id'];


    public function doer()
    {
        return $this->belongsTo('App\User', 'assignedTo');
    }
}
