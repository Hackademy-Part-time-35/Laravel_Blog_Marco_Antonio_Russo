<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "category_id",
        "description",
        "body",
        "visible",
        "img"
    ];

    protected function category(){
        return $this->belongsTo(Category::class);
    }
    protected function user(){
        return $this->belongsTo(User::class);
    }
}
