<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = ['contact_id', 'hobby'];

    public function contact()
    {
    	return $this->belongsTo(Contact::class);
    }
}
