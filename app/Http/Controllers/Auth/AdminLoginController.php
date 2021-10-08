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

            $trending_dress = DB::table('dress')
                ->join('trending_dress', 'dress.dress_id', '=', 'trending_dress.dress_id')
                ->select('dress.*', 'trending_dress.*')
                ->get();

                $dress = DB::table('dress')->get();
                $dress_type = DB::table('dress_type')->get();
                $orders = DB::table('order')
                        ->join('dress', 'order.dress_id', '=', 'dress.dress_id')
                        ->join('users', 'order.customer_id', '=', 'users.id')
                        ->select('order.*', 'dress.*', 'users.*')
                        ->get();
    
                $feedbacks = DB::table('users')
                            ->join('feedback', 'users.id', '=', 'feedback.customer_id')
                            ->select('users.*', 'feedback.*')
                            ->get();
                
                return view('auth.adminPage', [
                    'username' => auth()->guard('admin')->user()->name,
                    'customer' => $customer,
                    'tailor' => $tailor,
                    'trending_dress' => $trending_dress,
                    'dress' => $dress,
                    'dress_type' => $dress_type,
                    'orders' => $orders,
                    'feedbacks' => $feedbacks
                ]);
            //dd(auth()->guard('admin')->user()->name);

        }

        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

    public function showAdminHome() {
        $customer = User::where('is_tailor', 0)->get();
            $tailor = User::where('is_tailor', 1)->get();

            $trending_dress = DB::table('dress')
                ->join('trending_dress', 'dress.dress_id', '=', 'trending_dress.dress_id')
                ->select('dress.*', 'trending_dress.*')
                ->get();

                $dress = DB::table('dress')->get();
                $dress_type = DB::table('dress_type')->get();
                $orders = DB::table('order')
                        ->join('dress', 'order.dress_id', '=', 'dress.dress_id')
                        ->join('users', 'order.customer_id', '=', 'users.id')
                        ->select('order.*', 'dress.*', 'users.*')
                        ->get();
    
                $feedbacks = DB::table('users')
                            ->join('feedback', 'users.id', '=', 'feedback.customer_id')
                            ->select('users.*', 'feedback.*')
                            ->get();
                
                return view('auth.adminPage', [
                    'username' => auth()->guard('admin')->user()->name,
                    'customer' => $customer,
                    'tailor' => $tailor,
                    'trending_dress' => $trending_dress,
                    'dress' => $dress,
                    'dress_type' => $dress_type,
                    'orders' => $orders,
                    'feedbacks' => $feedbacks
                ]);
    }

}