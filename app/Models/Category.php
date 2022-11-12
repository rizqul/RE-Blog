<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function getRouteKeyName() /* to override  the default parameter on route (default parameter = 'id') by laravel  */
    {
        return 'slug';
    }
}
