<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Useers extends Model
{
    protected $fillable=['pseudo'];


    public function user(){

        return $this->belongsTo(Gender::class);
    }
}
