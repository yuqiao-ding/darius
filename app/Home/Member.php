<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'jjj';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id' ,'name' ,'email' ,'password'];
}
