<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Resources\Message as MessageResource;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msg = Message::all();
        return view('home')->with('msg', $msg);
    }
    public function create(Request $request){
      // Validate
      $request->validate([
        'msg' => 'required|max:255'
      ]);


      // Store
      $msg = new Message;
      $msg->user_id = auth()->user()->id;
      $msg->msg = $request->msg;

      $msg->save();
      // redirect
      return redirect('/home');
    }
}
