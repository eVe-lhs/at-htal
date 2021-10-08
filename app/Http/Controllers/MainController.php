<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Dress;
use App\User;
use Auth;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dress = DB::table('dress')
                ->join('trending_dress', 'dress.dress_id', '=', 'trending_dress.dress_id')
                ->select('dress.*', 'trending_dress.*')
                ->get();
        $tailor = User::where('is_tailor', 1)->get();
        $measurement = DB::table('measurement')->where('customer_id', Auth::user()->id)->first();
        //return $dress;
        return view('at_htel_home_page', ['dress' => $dress, 'tailor' => $tailor, 'measurement' => $measurement]);
    }

    public function show_shop_page($id = null) {
        //$dress = DB::table('dress')->paginate(8);
        
        if(!$id == null){
            $dress = DB::table('dress')->where('dress_type_id', $id)->paginate(8);
        }
        else{
            $dress = DB::table('dress')->paginate(8);
        }
        $tailor = User::where('is_tailor', 1)->get();
        $measurement = DB::table('measurement')->where('customer_id', Auth::user()->id)->first();

        return view('catalog_page', ['dress' => $dress, 'tailor' => $tailor, 'measurement' => $measurement]);
    }

    public function show_profile() {
        $user = User::where('id', Auth::user()->id)->first();
        //echo $user->name;
        $measurement = DB::table('measurement')->where('customer_id', Auth::user()->id)->first();
        return view('profile_view', ['user' => $user, 'measurement' => $measurement]);
    }

    public function show_cart_page() {
        $orders = DB::table('order')
                    ->join('dress', 'order.dress_id', '=', 'dress.dress_id')
                    ->join('users','order.tailor_id','=','users.id')
                    ->select('order.*', 'dress.*','users.*')
                    ->where('order.customer_id', Auth::user()->id)
                    ->get();
        //return $orders;
        return view('cart_page', ['orders' => $orders]);
    }

    public function view_how_to_measure() {
        return view('measure');
    }
    public function tailorCatalog(){
        $dress = DB::table('dress')
                ->select('dress.*')
                ->get();
        $mydress = DB::table('dress')->where('tailor_id',Auth::user()->id)->select('dress.*')->get();
        return view('tailorCatalog',['dress' => $dress,'mydress'=>$mydress]);
    }
    public function tailorOrder(){
        $order = DB::table('order')
                ->join('dress','order.dress_id','=','dress.dress_id')
                ->join('measurement','order.customer_id','=','measurement.customer_id')
                ->join('users','order.customer_id','=','users.id')
                ->select('order.*','dress.*','measurement.*','users.*')
                ->where('order.tailor_id',Auth::user()->id)
                ->get();
        Auth::user()->unreadNotifications->markAsRead();
        return view('tailorOrder',['order'=>$order]);
    }
    public function showTailorProfile() {
        $user = User::where('id', Auth::user()->id)->first();
        //echo $user->name;
        return view('tailorProfile', ['user' => $user]);
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
            'dress_photo' => 'required|mimes:jpeg,jpg,png'
        ]);
        $file = $request->file('dress_photo');
        $image_name = $file->getClientOriginalName();
        $filename = $image_name;
        $price=$request->price;
        $tailor_id=Auth::user()->id;
        $file->move('dresses/', $filename);
        DB::table('dress')->insert(
            ['dress_type_id' => $request->dress_type_id, 'dress_photo' => $filename,'price'=>$price,'tailor_id'=>$tailor_id]
        );

        return redirect()->route('tailorCatalog')->with('message', 'Dress has been successfully added!');
    }

    
    public function store_feedback(Request $request) {
        $validated_data = $request->validate([
            'email' => 'required',
            'details' => 'required'
        ]);

        if($request->email == Auth::user()->email){
            DB::table('feedback')->insert(
                ['customer_id' => Auth::user()->id, 'content' => $request->details]
            );
            return redirect()->back()->with('success', 'Your feedback has been sent successfully!');
        }
        else{
            return redirect()->back()->with('fail_message', 'Your email is incorrect');
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
