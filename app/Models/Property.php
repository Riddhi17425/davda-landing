<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'property';
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $casts = [
        'image' => 'array',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}
}

