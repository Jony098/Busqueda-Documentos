<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

	protected $fillable = [
        'url', 'mime', 'size',
    ];

	public function document()
    {
		return $this->belongsTo(Document::class);	
    }

    public function directory()
    {
		return $this->belongsTo(Directory::class);	
    }
}
