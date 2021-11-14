<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catergory extends Model
{
    //use HasFactory;
    protected $fillable = ['id', 'name', 'created_at','updated_at' ];

    protected $table = 'catergory';

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function getmoduleID(){
        return $this->moduleid;
    }
}


    
