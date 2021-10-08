<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Dress;

class DressController extends Controller
{

    public function get_dress_type() {
        $dress = DB::table('dress_type')->get();
        //return $dress;
        return view('admin.dress_add')->with('dress', $dress);
    }

    public function display() {
        //$dress = Dress::paginate(8);
        
        //$dress = DB::table('dress')->where('dress_type_id', $dress_type)->paginate(8);
        $dress = DB::table('dress')
                ->join('trending_dress', 'dress.dress_id', '=', 'trending_dress.dress_id')
                ->select('dress.*', 'trending_dress.*')
                ->get();
        //return $dress;
        return view('at_htel_home_page')->with('profile', $dress);
    }

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
        'dress_photo' => 'required|mimes:jpeg,jpg,png',
        'price' => 'required'
    ]);
    $file = $request->file('dress_photo');
    $image_name = $file->getClientOriginalName();
    $filename = $image_name;
    $file->move('dresses/', $filename);
    DB::table('dress')->insert(
        ['dress_type_id' => $request->dress_type_id, 'dress_photo' => $filename, 'price' => $request->price]
    );

    return redirect()->route('admin-home')->with('message', 'Dress has been successfully added to database !');
}
    

    public function display_trending_dress_view() {
        //$dress_count = DB::table('trending_dress')->count();
        $dress = DB::table('dress')
                ->join('trending_dress', 'dress.dress_id', '=', 'trending_dress.dress_id')
                ->select('dress.*', 'trending_dress.*')
                ->get();
        //return $dress;
        return view('admin.trending_dress_view', ['dress' => $dress]);
    }

    public function display_trending_dress_add_form() {
        
        //return $dress;
        $dress = DB::table('dress')->get();
        return view('admin.trending_dress_add', ['dress' => $dress]);
    }

    public function handle_trending_dress_add_form(Request $request) {
        DB::table('trending_dress')->insert(
            ['dress_id' => $request->dress_id]
        );
        
        return redirect()->route('admin_trending_dress_add')->with('message', 'Dress has been successfully added to database !');
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
