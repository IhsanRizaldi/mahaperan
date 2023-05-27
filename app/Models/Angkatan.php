<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Angkatan extends Model
{
    use HasFactory;
    protected $table = 'angkatan';
    protected $fillable = ['nama_angkatan','slug','kode_angkatan','gambar'];

    // Model
    protected static function booted(): void
    {
        static::creating(function (Angkatan $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }

}
