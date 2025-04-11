<?php

namespace App\Models;

use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    public function Category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function User():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Tag():BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
