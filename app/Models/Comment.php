<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'user_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceRelatedComment()
    {
        return $this->belongsTo(ServiceRelatedContent::class);
    }
}
