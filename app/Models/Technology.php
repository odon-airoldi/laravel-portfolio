<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function projects()
    {
        $this->belongsToMany(Project::class);
    }
}
