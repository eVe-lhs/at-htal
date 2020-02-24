<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Profile;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $validated_data = $request->validate([
            'name' => 'required',
            'profile_pic' => 'required|mimes:jpeg,jpg,png'
        ]);
        $profile = new Profile;

        $profile->name = $request->name;
        if($request->hasfile('profile_pic')) {
            $file = $request->file('profile_pic');
            $image_name = $file->getClientOriginalName();
            //$extension = $file->getClientOriginalExtension();
            //$filename = time() . "." . $extension;
            $filename = $image_name;
            $file->move('Images/', $filename);
            $profile->profile_pic = $filename;
        }
        else {
            return $request;
            $profile->profile_pic = '';
        }
        //$profile->save();
        return redirect()->route('img_insert')->with('message', 'Success!');
    }

    public function display() {
        //$profile = Profile::all();
        $dress = DB::table('dress')->paginate(8);
        return view('at_htel_home_page')->with('profile', $dress);
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
