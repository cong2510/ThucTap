<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    use HasFactory;
    protected $table = 'rapchieuphim';
    protected $primaryKey = "IDRap ";
    protected $fillable = ['TenRap'];

}