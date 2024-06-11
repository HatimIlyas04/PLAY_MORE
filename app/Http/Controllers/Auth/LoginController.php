<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     * 
     *
     * @return void
     */


    public function login(Request $request)
    {
        // La validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            $user = Auth::user();

            if ($user->privilege->libelle_privilege === 'administrateur') {
                
                return redirect()->route('dashboard')->with('success', 'Vous êtes connecté avec succès!');
            } else {
                // Auth::logout();
                // return redirect()->route('admin.login')->with('message', 'You are not authorized to access this page');
                return redirect()->route('home')->with('success', 'Vous êtes connecté avec succès!');
            }
        } else {
            
            return back()->withErrors(['email' => 'Les informations d\'identification sont invalides. Veuillez réessayer.']);
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
