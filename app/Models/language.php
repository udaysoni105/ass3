<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    use HasFactory;
    public function deployment(){
        return $this->belongsToMany(Deployment::class);
    }
}
