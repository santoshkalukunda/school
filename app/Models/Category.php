<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Wildside\Userstamps\Userstamps;

class Category extends Model
{
    use HasFactory, Userstamps, HasSlug;

    protected $guarded = ['id'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
            // ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function scopeActived($query)
    {
        return $query->where('status', true);
    }

    public function scopeDeactives($query)
    {
        return $query->where('status', false);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_categories', 'category_id', 'post_id');
    }
}
