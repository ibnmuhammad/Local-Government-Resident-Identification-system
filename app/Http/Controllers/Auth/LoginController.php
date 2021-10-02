<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    //  protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        $role = Auth::user() -> role;
            // $role = Auth::role_user() -> role_id;            //improper method call
        switch ($role) {
            case 'superadministrator' :
                // return '/admin/dashboard';
                return  '/superadministrator';
                break;
            case 'administrator' :
                // return '/admin/dashboard';
                return  '/admin';
                break;
            case 'user' :
                // return '/user/dashboard';
                return '/user';
                break;
            default:
                return view('login');
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
