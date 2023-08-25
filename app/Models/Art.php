<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Art extends Model
{
    protected $fillable = [
        'name',
        'artist',
        'url',
        'explain',
    ];
    use HasFactory;
    protected $table = 'arts';
    
    public function Post()   
    {
        return $this->hasMany(Post::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
