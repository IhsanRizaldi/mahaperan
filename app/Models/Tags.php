<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = ['title_tags','slug','image_tags','description_tags'];

    // Model
    protected static function booted(): void
    {
        static::creating(function (Tags $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
