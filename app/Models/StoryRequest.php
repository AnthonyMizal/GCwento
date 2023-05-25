<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryRequest extends Model
{
    use HasFactory;

    public function creator()
    {
    return $this->belongsTo(User::class);
    }

}
