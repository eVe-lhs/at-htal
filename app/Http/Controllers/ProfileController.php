<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Dress;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request) {
        $validated_data = $request->validate([
            'old_password' => 'required',
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'required'
        ]);
        $encrypted_pw =Hash::make($request->password, [
            'rounds' => 12
        ]);
        User::where('id',Auth::user()->id)
        ->update(['password' => $encrypted_pw]);
        return redirect()->back()->with('success', 'Your password has been updated!');
    }

    public function update_profile(Request $request) {
        $validated_data = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        User::where('id',Auth::user()->id)
                ->update(['name' => $request->name, 'phone_number' => $request->phone_number, 'address' => $request->address]);

        return redirect()->back()->with('success', 'Your profile has been updated!');
    }

    public function update_measurement(Request $request) {
        $validated_data = $request->validate([
            'bust' => 'required|min:2|max:2',
            'waist' => 'required|min:2|max:2',
            'backlength' => 'required|min:2|max:2',
            'hip' => 'required|min:2|max:2',
            'bicep_left' => 'required|min:2|max:2',
            'bicep_right' => 'required|min:2|max:2'
        ]);

        $measurement = DB::table('measurement')->updateOrInsert(
            ['customer_id' => Auth::user()->id],
            ['bust' => $request->bust, 'waist' => $request->waist, 'backlength' => $request->backlength,
            'hip' => $request->hip, 'bicep_left' => $request->bicep_left, 'bicep_right' => $request->bicep_right]
        );

        return redirect()->back()->with('success', 'Your measurements have been updated!');
    }

    public function index()
    {
        //
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
        //
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
