<?php

namespace App;  

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['judul','isi','jawaban_tepat_id','profile_id'];
    public function users() {
        return $this->belongsTo('App\User', 'profile_id', 'id');
    }
    public function answers(){
        return $this->hasMany('App\answer', 'question_id', 'id');
    }
    public function answer(){
        return $this->hasOne('App\answer', 'jawaban_tepat_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany('App\tag', 'question_id', 'id');
    }
}   
