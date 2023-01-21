<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $fillable = ['judul', 'ringkasan', 'tahun', 'poster', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function kritik()
    {
        return $this->hasMany(Kritik::class, 'film_id');
    }
}

