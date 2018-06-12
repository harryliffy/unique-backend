<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Auth;
use App\user;
// use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
    $userSocial = Socialite::driver('facebook')->user();

    $user= User::where ('email', $userSocial->user['email'])->first();
    //dd(  $userSocial );
    
if ($user) {
if (Auth::logInUsingId($user -> id)){
return redirect() ->route('home');

}

}

$userSignup= User::create([
    'name' =>$userSocial->user['name'],
    'email' => $userSocial ->user['email'],
    'password' => bcrypt('11234'),
    'avatar' =>$userSocial ->avatar,
    'facebook_profile' => $userSocial->profileUrl,
    'gender' => 'ent',
]);
    //dd( $user);

    // $user->token;
    // code for facebook sign up and login

    //  check if user is registered
    if ($userSignup) {
        if (Auth::loginUsingId($userSignup -> id)){
            return redirect()-> route('home');
        }
    
}

}

}