<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['judul','isi','jawaban_tepat_id','profile_id','created_at','updated_at'];
    public function profiles() {
        return $this->hasOne('App\profile', 'id', 'profile_id');
    }
}   
