<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email'];

    public function hobbies()
    {
    	return $this->hasMany(Hobby::class);
    }
}
