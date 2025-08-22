<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $fillable = [
        'title',
        'description',
        'amount',
        'image',
        'service_id',
    ];

    /**
     * Get the service that owns the detail.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
