<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = ['user_id','tags_id','title_article','slug','image_article','description_article'];

    // Model
    protected static function booted(): void
    {
        static::creating(function (Article $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function tags()
    {
        return $this->belongsTo(Tags::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
