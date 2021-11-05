<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos
    public function article(){
        return $this->hasMany('App\Models\article');
    }
}
