<?php
 

 
namespace App\Http\Controllers;


use Auth;
use App\User;
use Illuminate\Http\Request;
use Socialite;
class LoginController extends Controller
{
    //

public function login(Request $request){


    if(Auth::attempt([
        'email' => $request-> email,
        'password' => $request ->password
    ]))
    {
$user=User::where('email', $request->email)->first();

if ( $user -> is_admin() ){
    return redirect() -> route('admin.dashboard');
}
return redirect() -> route('home');

    }
    return redirect ()-> back();
}


public function admin(Request $request){
    //dd($request->all());
if (    Auth::user()->admin ){
    return view('admin.dashboard');
}

return redirect() -> route('home');
}


public function redirectToProvider()
{
    return Socialite::driver('facebook')->redirect();
}

/**
 * Obtain the user information from GitHub.
 *
 * @return \Illuminate\Http\Response
 */
public function handleProviderCallback()
{
    $user = Socialite::driver('facebook')->user();

    dd( $user);

    // $user->token;
    // code for facebook sign up and login
}

}
