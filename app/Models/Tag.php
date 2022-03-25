<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    use HasFactory;
    protected $visible = ['nama', 'slug'];
    protected $fillable = ['nama', 'slug'];
    public $timestamps= true;
}
