<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;

    protected $table = 'article';
    
    protected $fillable = [
        'title',
        'content',
        'image',
        'publisher',
        'user_id',
        'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function publisherUser()
    {
        return $this->belongsTo(User::class, 'publisher', 'nama');
    }
     
}
