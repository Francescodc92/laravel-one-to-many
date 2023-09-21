<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
    ];

    /*
        Relationships
    */

    public function Projects()
    {
        return $this->hasMany(Post::class);
    }
}
