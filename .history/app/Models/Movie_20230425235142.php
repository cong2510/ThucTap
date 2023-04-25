<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'phim';
    protected $primaryKey = "IDPhim";
    protected $fillable = ['TenPhim','TenTheLoai'];
}