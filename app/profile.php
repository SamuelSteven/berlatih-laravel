<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function profiles() {
        return $this->hasMany('App\question', 'id', 'profile_id');
    }
}
