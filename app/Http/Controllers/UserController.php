<?php

namespace App\Http\Controllers;

use App\Tailor;

use App\Customer;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request) {

        $encrypted_pw = $this->get_encrypted_password($request->password);

        $user = DB::table('tailor')
               ->where('tailor_email', $request->email)
               ->where('tailor_password', $encrypted_pw)
               ->get();

        if(count($user) > 0) {
            //$request->session()->put('user', $request->tailor_name);
            //echo gettype($request->session()->get('user'));
            //return view('session_test')->with('data', $request->session()->get('user'));
            //$user = Auth::user();
            echo $user;
        }
        else {
            $user = DB::table('customer')
                    ->where('customer_email', $request->email)
                    ->where('customer_password', $encrypted_pw)
                    ->get();
            if(count($user) > 0) {
                echo $user;
            }
            else {
                echo "Account does not exist!";
            }
        }

    }

    private function get_encrypted_password($plain_password) {
        $ciphering = "AES-128-CTR";
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = "GeeksforGeeks";
        $encrypted_pw = openssl_encrypt($plain_password, $ciphering, 
        $encryption_key, $options, $encryption_iv);
        return $encrypted_pw;
    }

    public function tailor_list()
    {
        //echo "code will be here";

        /* $tailor = DB::table('tailor')
               ->where('address', 'Yangon')
               ->get();
        return view('tailor_view', ['tailor'=>$tailor]); */

        $tailor = Tailor::all();
        return view('tailor_list_view', ['tailor' => $tailor]);
        //return view('tailor_view')->with('tailor', $tailor);
    }

    public function customer_list() {
        $customer = Customer::all();
        return view('customer_list_view', ['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'user_type' => 'required|in:tailor,customer',
            'name' => 'required',
            'password' => 'required_with:password_confirmation|same:password_confirmation',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'password_confirmation' => 'required'
        ]);
        //echo gettype($validated_data);

        if($request->user_type == "tailor") {
            $tailor = new Tailor;
            $tailor->tailor_name = $request->name;
            $encrypted_pw = $this->getEncryptedPassword($request->password);
            $tailor->tailor_password = $encrypted_pw;
            $tailor->tailor_email = $request->email;
            $tailor->phone_number = $request->phone_number;
            $tailor->address = $request->address;
            echo $tailor->save();
        }
        else {
            $customer = new Customer;
            $customer->customer_name = $request->name;
            $encrypted_pw = $this->getEncryptedPassword($request->password);
            $customer->customer_password = $encrypted_pw;
            $customer->customer_email = $request->email;
            $customer->phone_number = $request->phone_number;
            $customer->address = $request->address;
            echo $customer->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
