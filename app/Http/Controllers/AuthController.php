<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request) {
        if(Auth::check()){
            return redirect(route('user.profile'));
        }

        $validate = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if ($validate->fails()){
            return \response()->json($validate->errors());
        }

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

        if($user){
            Auth::login($user);
            return redirect()->to(route('user.profile'));
        }
        
        return redirect()->to(route('user.profile'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
    public function login(Request $request) {
        if(Auth::check()){
            return redirect(route('user.profile'));
        }
        $formFields = $request->only(['email','password']);

        if(Auth::attempt($formFields)){
            return redirect(route('user.profile'));
        }
        return redirect(route('user.login'))->withErrors([
            'email' => 'Не удалось авторизоваться'
        ]);
    }
}
