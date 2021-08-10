<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index()
    {
    $posts = DB::table('posts')->get();

        return view('post.index', ['posts' => $posts]);
    }
}
