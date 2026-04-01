<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use SoftDeletes;
    protected $table = 'blog';

    protected $fillable = [
        'title',
        'date',
        'url',
        'short_description',
        'front_image',
        'detail_image',
        'description',
        'cta_image',
        'conclusion',
        'meta_title',
        'meta_description',
        'title_description',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $casts = [
        'title_description' => 'array',
    ];
}
 