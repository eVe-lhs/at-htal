<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\noti;
use App\Notifications\orderReply;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use App\Notifications\NotifyTailor;
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
            'deadline'=>$request->date,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()]
        ]);

        //return $order = DB::table('order')->select('created_at')->get();

        $tailorId=$request->tailor;
        $dressId=$request->dress;
        //echo $order_id;
        User::find($tailorId)->notify((new noti($tailorId,$dressId)));
       return redirect()->back();

        //dd($measurement);
    }
public function accept($orderId,$customerId){
    $tailor = DB::table('order')
    ->join('users','order.tailor_id','=','users.id')
    ->select('users.*')
    ->where('order.order_id',$orderId)
    ->get();
    $status='Accepted';
    DB::table('order')
     ->where('order_id',$orderId)
     ->update(
        ['order_status' => 'confirmed']
     ); 
     foreach($tailor as $t){
     User::find($customerId)->notify((new orderReply($t->name,$status)));}
    return redirect()->back();
}
public function deny($orderId,$customerId){
    $tailor = DB::table('order')
    ->join('users','order.tailor_id','=','users.id')
    ->select('users.*')
    ->where('order.order_id',$orderId)
    ->get();
    $status='denied';
    DB::table('order')
     ->where('order_id',$orderId)
     ->update(
        ['order_status' => 'denied']
     ); 
     foreach($tailor as $t){
     User::find($customerId)->notify((new orderReply($t->name,$status)));}
    return redirect()->back();
}
public function finish($orderId,$customerId){
    $tailor = DB::table('order')
    ->join('users','order.tailor_id','=','users.id')
    ->select('users.*')
    ->where('order.order_id',$orderId)
    ->get();
    $status='finished. You will receive soon.';
    DB::table('order')
     ->where('order_id',$orderId)
     ->update(
        ['order_status' => 'completed']
     ); 
     foreach($tailor as $t){
     User::find($customerId)->notify((new orderReply($t->name,$status)));}
    return redirect()->back();
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
