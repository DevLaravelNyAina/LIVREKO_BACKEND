<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'description',
        'statu',
        'image'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
