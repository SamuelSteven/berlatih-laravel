<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['nama_lengkap','alamat_email','photo'];
    
    public function profiles() {
        return $this->hasMany('App\question', 'id', 'profile_id');
    }
    public function profile() {
        return $this->hasMany('App\answer', 'id', 'profile_id');
    }
}
