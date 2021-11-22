<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';

    // protected $fillable = [
    //     'id','user_id','name','contents'
    // ];

    

    public function comment(){
        return $this->hasMany(Comment::class);
    }
    

    public function user(){
        return $this->hasMany(User::class);
    }

    
}
