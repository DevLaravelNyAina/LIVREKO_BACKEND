<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'description',
        'statu',
        'image',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
