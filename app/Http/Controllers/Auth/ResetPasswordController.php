<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    function resetPasswordForm() {
        return view('auth.passwords.reset');
    }

    function resetPassword(Request $request) {
        // $request->validate($request->all());
        $email=$request->get('email');
        $pwd=$request->get('password');
        $id=DB::table('users')->where('email', $email)->first(['id']);
        $user= User::findOrfail($id->id);
        $user->update([
            "password"=>$pwd
        ]);
        return redirect('/')->with('success','Vous venez de modifier votre code de sécurité');
    }
}
