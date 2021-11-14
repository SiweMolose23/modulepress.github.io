<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //use HasFactory;
    protected $fillable = ['moduleid', 'name', 'moduleCode','description' , 'user_id' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getuserID(){
        return $this->user_id;
    }
}


    
