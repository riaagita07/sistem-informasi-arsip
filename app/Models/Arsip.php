<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function codearsip()
    {
        return $this->belongsTo(CodeArsip::class,'kode','code');
    }
    public function pembuat()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function pengunduh()
    {
        return $this->hasMany(Pengunduh::class,'arsip_id');
    }
}
