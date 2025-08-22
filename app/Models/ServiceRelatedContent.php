<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRelatedContent extends Model
{
    protected $fillable = [
        'title',
        'short_desc',
        'long_desc',
        'image',
        'tagline',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
