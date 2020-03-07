<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Userinfo;
use Auth;
use Illuminate\Support\Facades\Validator;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user = Auth::user();
       $userInfo = Userinfo::find($user->id);

       if($userInfo->steps === 1){
        return view('step1', compact('userInfo'));

       } elseif($userInfo->steps ===2){
        return view('step2', compact('userInfo'));

       } elseif($userInfo->steps ===2){
        return view('step3', compact('userInfo'));

       } else {
        return view('home', compact('userInfo'));
       }
    }

       /**
     * show first steps
     */

    public function showstep1(Request $request)
    {
        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);
        return view('step1',compact('userInfo'));
    }

    /**
     * Create first steps
     */
    public function cteatestep1(Request $request){

        Validator::make($request->all(), [
            'address1' => 'required|max:255',
            'contact' => 'required|min:10|max:10',
            'profileimage' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

       

        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);

        $fileName = "profileimage-".$user->id. '-'. time() . '.' . $request->profileimage->getClientOriginalExtension();
        $request->profileimage->storeAs('public/upload', $fileName);
        $userInfo->address1 = $request->get('address1');
        $userInfo->contact = $request->get('contact');
        $userInfo->profile_image = $fileName;
        $userInfo->steps = 2;
        $userInfo->save();
        return redirect('/step-2');
    }

    /**
     * show second steps
     */

    public function showstep2(Request $request)
    {
        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);
        return view('step2',compact('userInfo'));
    }


        /**
     * Create first steps
     */
    public function cteatestep2(Request $request){

        Validator::make($request->all(), [
            'bankimage' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);

        $fileName = "bankimage-".$user->id. '-'. time() . '.' . $request->bankimage->getClientOriginalExtension();
        $request->bankimage->storeAs('public/upload', $fileName);
        $userInfo->bank_image = $fileName;
        $userInfo->steps = 3;
        $userInfo->save();
        return redirect('/step-3');
    }


      /**
     * show view steps
     */

    public function showstep3(Request $request)
    {
        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);
        return view('step3',compact('userInfo'));
    }

    
        /**
     * Create first steps
     */
    public function cteatestep3(){
        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);
        $userInfo->status = 1;
        $userInfo->save();
        return view('home', compact('userInfo'));
    }

    public function update(Request $request){

    }
}
