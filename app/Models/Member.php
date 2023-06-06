<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    //one to one 

    // protected $primaryKey = "member_id";
    // public function group(){
    //     return $this->hasOne('App\Models\Group','id');
    // }



    //one to many
    protected $primaryKey = "member_id";
    public function group(){
    return $this->hasMany('App\Models\Group','id','group_id');
    }
}
