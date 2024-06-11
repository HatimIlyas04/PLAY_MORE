<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionReponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'reponse',
        'article_id'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
