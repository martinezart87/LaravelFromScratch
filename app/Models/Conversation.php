<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    public function replies(){
        return $this->hasMany(Reply::class);    
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}


