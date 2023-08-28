<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Node\Block\Document;

class PageDocument extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
