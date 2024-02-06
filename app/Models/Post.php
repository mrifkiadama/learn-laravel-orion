<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'category',
        'published',
        
    ];

    /**
     * Scope the query by published
     */
    
    public function scopePublished($query)
    {
        return $query->where('published',false);

        // Post::where('title','some title')->where('published',true);
        // Like same 
        // Post::where('title','some title')->published();
    }

    /**
     * Scope the query by category
     */

    public function scopeCategory($query, $category)
    {
        return $query->where('category',$category);

        // Post::query()->whereCategory('Laravel Orion');

    }
}
