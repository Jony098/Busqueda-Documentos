<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

	protected $fillable = [
        'name', 'last_name',
    ];

    public function documents()
    {
		return $this->hasMany(Document::class);	
    }
}
