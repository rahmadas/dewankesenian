<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama', 'gambar', 'keterangan'
    ];
    protected $dates = ['create_at'];
}