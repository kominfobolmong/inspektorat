<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'image',
        'slug',
        'is_unggulan',
    ];

    public function penyakits()
    {
        return $this->hasMany(Penyakit::class);
    }

    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class);
    }

    public function opt()
    {
        return $this->belongsToMany(Opt::class);
    }
}
