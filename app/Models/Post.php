<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'art_id',
        'user_id',
    ];
    use HasFactory;
    public function art()   
    {
        return $this->belongsTo(Art::class);
    }
    public function user()   
    {
        return $this->belongsTo(User::class);
    }
    
    public function getByUser(User $user, int $limit_count = 10)
    {
        return $this::with('user')->where('user_id', $user->id)->orderBy('created_at', 'DESC')->paginate($limit_count);
        //orderByを連鎖させればfavはかける
    }
}
