<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{

	protected $fillable = [
        'name',
    ];

    public function user()
    {
		return $this->belongsTo(User::class);	
    }

    public function other_directory()
    {
		return $this->hasOne(Directory::class);	
    }
}
