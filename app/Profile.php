<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Fillable mass be assignment
    protected $fillable=['user_id','phone','address'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
