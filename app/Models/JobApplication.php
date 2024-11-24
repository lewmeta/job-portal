<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    /** @use HasFactory<\Database\Factories\JobApplicationFactory> */
    use HasFactory;

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
        // a job can have more than one job application;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
        // a user can have more than one job application;
    }
}
