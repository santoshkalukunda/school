<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class CategoryMenu extends Model
{
    use HasFactory, Userstamps;
    protected $guarded = [];

    public function scopePositioned($query, $ascending = true)
    {
        return $query->orderBy('position', $ascending ? 'asc' : 'desc');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
