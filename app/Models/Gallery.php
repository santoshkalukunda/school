<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Wildside\Userstamps\Userstamps;

class Gallery extends Model
{
    use HasFactory, Userstamps, HasSlug;

    protected $guarded = ['id'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
        // ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublished($query)
    {
        return $query->where('status', true);
    }

    public function scopeUnpublish($query)
    {
        return $query->where('status', false);
    }
    public function scopePhotos($query)
    {
        return $query->where('type', 'photo');
    }
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }
}