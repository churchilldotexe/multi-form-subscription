<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddOn extends Model
{
    /** @use HasFactory<\Database\Factories\AddOnsFactory> */
    use HasFactory;

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
