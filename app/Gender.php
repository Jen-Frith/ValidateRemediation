<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable=['gender', 'gender_id'];


public function gender(){

    return $this->belongsTo(Useers::class);
}
}
