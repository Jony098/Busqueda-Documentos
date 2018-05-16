<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Document extends Model
{

    use ElasticquentTrait;

    protected $table = 'documents';

	protected $fillable = [
        'title', 'description',
    ];

    public function author()
    {
		return $this->belongsTo(Author::class);	
    }

    public function files()
    {
		return $this->hasMany(File::class);	
    }

    public function user()
    {
		return $this->belongsTo(User::class);	
    }
}
