<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'tag_id'
    ];
}
