<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        $user = DB::table('users')->where('name', 'Kaylie Stokes')->value('email');
        


    // echo $user;
    // $titles = DB::table('users')->pluck('name');

    // foreach ($titles as $title) {
    //     echo "<li>" . $title . "</li><br>";
    // }

    // $titles = DB::table('users')->pluck('email', 'name');

    // foreach ($titles as $name => $title) {
    //     echo "<li>" . $title . $name . "</li>";
    // }

    DB::table('users')->orderBy('id')->chunk(100, function ($users) {
        foreach ($users as $user) {
            echo "<li>" . $user . "</li>";
        }
    });
    }
    
}
