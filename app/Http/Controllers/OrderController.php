<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Auth;

class OrderController extends Controller
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

        $order = DB::table('order')->insert([
            ['customer_id' => $request->customer, 'tailor_id' => $request->tailor, 'dress_id' => $request->dress,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]
        ]);

        //return $order = DB::table('order')->select('created_at')->get();

        return redirect()->route('shop')->with('success', 'Your order has been successfully sent');

        //dd($measurement);
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
