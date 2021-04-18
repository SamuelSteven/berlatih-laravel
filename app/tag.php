<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function tags(){
        return $this->belongsToMany('App\tag', 'question_id', 'id');
    }
}
