<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $visible = ['nama_kategori', 'slug'];
    protected $fillable = ['nama_kategori', 'slug'];

    public $timestamps = true;

    public function beritas()
    {
        return $this->hasMany('App\Models\Berita', 'id_kategori');

    }

    function getRouteKeyName()
    {
        return 'slug';
    }
}
