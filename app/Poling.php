<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Poling extends Model
{
    protected $table = 'poling';
    protected $fillable = [
        'user_id',
        'menu',
        'persentase',
    ];
    public function user()
    {
        return $this->belongsTo('App\Poling', 'user_id', 'id');
    }
}
