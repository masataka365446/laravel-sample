<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    //
    # indexアクションを定義
    public function index() {
        # データの取得
        $posts = Post::all(); //Postのデータ全て$postsに代入
        $comments = Comment::all();
        return view('posts',['posts' => $posts, 'comments' => $comments]);



   }

   
//    public function index()
//     {
//         return view('posts');
//     }



}
