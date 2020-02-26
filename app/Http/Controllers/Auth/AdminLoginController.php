<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

class AdminLoginController extends Controller

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

    protected $guard = 'admin';

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

 

    public function showLoginForm()

    {

        return view('auth.adminLogin');

    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
            $customer = User::where('is_tailor', 0)->get();
            $tailor = User::where('is_tailor', 1)->get();

            return view('auth.adminPage', [
                'username' => auth()->guard('admin')->user()->name,
                'customer' => $customer,
                'tailor' => $tailor,
            ]);
            //dd(auth()->guard('admin')->user()->name);

        }

        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

}