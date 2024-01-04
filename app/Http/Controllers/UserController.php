<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('users', [
            'users'=>$users,
        ]);
    }


    public function show(User $user)
    {
        $user->load('teams');
        $user->teams()->attach(2);
        return $user;
        //CRIAR POSTS
        // $user->posts()->create([
        //     'title'=> 'Meu primeiro post',
        //     'body'=>'Isso é um post',

        // ]);

        // //DELETAR POSTS
        // $user->posts()->delete();

            // LER POSTS
        // dd($user->posts->toArray());


        return view ('user', [
            'name' => 'Guima',
            'user' => $user,
        ]);
    }
}
