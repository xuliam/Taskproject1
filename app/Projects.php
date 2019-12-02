<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name','thumbnail'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


}
