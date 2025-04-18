<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    public function User():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Task():BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
