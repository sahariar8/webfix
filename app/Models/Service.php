<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get the service details associated with the service.
     */


    public function details()
    {
        return $this->hasOne(ServiceDetail::class);
    }

    /**
     * Get the related contents associated with the service.
     */
    public function relatedContents()
    {
        return $this->hasMany(ServiceRelatedContent::class);
    }
}
