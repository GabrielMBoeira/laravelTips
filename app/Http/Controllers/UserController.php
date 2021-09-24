<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        //INSERINDO NA DATA BASE
        // $user = new User();
        // $user->name = 'Gabriel Boeira';
        // $user->email = 'gabrielmboeira@gmail.com';
        // $user->password = Hash::make('123');
        // $user->save();

        // echo 'Listagem de usuários';

        //RETORNO DA DATA BASE
        $user = User::where('id', 1)->first();

        return view('listUser', [
            'user' => $user
        ]);
    }
}
