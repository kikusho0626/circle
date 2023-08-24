<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;
    protected $table = 'arts';
    
    public function Post()   
    {
        return $this->hasMany(Post::class);
    }
    public function Art_User()   
    {
        return $this->hasMany(Art_User::class);
    }
}
