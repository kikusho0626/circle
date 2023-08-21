<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function arts()   
    {
        return $this->belongsTo(Art::class);
    }
    public function users()   
    {
        return $this->belongsTo(User::class);
    }
}
