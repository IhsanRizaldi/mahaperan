<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = ['angkatan_id','nama_anggota', 'jabatan_anggota','nama_kampus','gambar'];

    // Model
    protected static function booted(): void
    {
        static::creating(function (Anggota $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function angkatan()
    {
        return $this->belongsTo(Angkatan::class);
    }

}
