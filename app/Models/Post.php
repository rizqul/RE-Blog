<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id']; //Reverse $fillable
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        //filter by search
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        //filter by search and category
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // //filter by search and author
        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });


        // -----------------------------------------WRONG METHOD-------------------------------------------------------------------
        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query->where('title', 'like', '%' . $search . '%')->orwhere('body', 'like', '%' . $search . '%');
        // });
        // ----------------------------------------WRONG METHOD--------------------------------------------------------------------
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName() /* to override  the default parameter on route (default parameter = 'id') by laravel  */
    {
        return 'slug';
    }
}
