<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = [

        'cate_id',
        'name',
        'slug',
        'original_price',
        'image',
        'status',
        'trending',
    ];

    public function Category(){
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
