<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable = ['isi','profile_id','question_id'];
    public function answers() {
        return $this->belongsTo('App\question', 'question_id', 'id');
    }
    public function answer() {
        return $this->belongsTo('App\question', 'jawaban_tepat_id', 'id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'profile_id', 'id');
    }
}
