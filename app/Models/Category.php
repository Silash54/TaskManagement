<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function Task():HasMany
    {
        return $this->hasMany(Task::class);
    }
}
