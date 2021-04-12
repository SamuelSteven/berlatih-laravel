<?php

namespace App;  

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['judul','isi','jawaban_tepat_id','profile_id'];
    public function profiles() {
        return $this->belongsTo('App\profile', 'profile_id', 'id');
    }
}   
