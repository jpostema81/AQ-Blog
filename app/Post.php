<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'short_desc', 'long_desc', 'author_id'];

    protected $casts = [
        'slug' => 'string',
        'short_desc' => 'text',
        'long_desc' => 'text'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
