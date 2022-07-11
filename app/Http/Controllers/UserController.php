<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\user;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data = [
            'articles'   => Article::orderBy('updated_at', 'DESC')->take(3)->get(),

        ];
        return view('users.author.dashboard', $data);
    }


    public function show()
    {
        return view("users.show");
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'confirmed',
        ]);

        $user = user::find(Auth::user()->id);
        if($request->password != ""){
            $user->password = Hash::make($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;

        $user->update();

        return redirect("/users")->with('success', 'Profile Modifié avec succés');
    }
}
