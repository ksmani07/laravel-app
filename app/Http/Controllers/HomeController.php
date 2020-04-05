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
            'aadharno' => 'required|min:12|max:12',
            'fulladdress' => 'required|max:255',
            'State' => 'required|max:255',
            'District' => 'required|max:255',
            'Graduation' => 'required|max:255',
            'dateofbirth' => 'date|date_format:Y-m-d',
            'age' => 'required|min:2|max:2',
            'institution' => 'required|max:255',
            'mark' => 'required|min:3|max:3',
            'F_name' => 'required|max:255',
            'M_name' => 'required|max:255',
            'F_occupation' => 'required|max:255',
            'M_occupation' => 'required|max:255',
            'bankaccountno' => 'required|max:255',
            'bankname' => 'required|max:255',
            'bankarea' => 'required|max:255',
            'Micrcodeno' => 'required|max:255',
            'Ifsccodeno' => 'required|max:255',
            'contact' => 'required|min:10|max:10',
            'profileimage' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

       

        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);

        $fileName = "profileimage-".$user->id. '-'. time() . '.' . $request->profileimage->getClientOriginalExtension();
        $request->profileimage->storeAs('public/upload', $fileName);
        $userInfo->aadharno = $request->get('aadharno');
        $userInfo->fulladdress = $request->get('fulladdress');
        $userInfo->State = $request->get('State');
        $userInfo->District = $request->get('District');
        $userInfo->Graduation = $request->get('Graduation');
        $userInfo->dateofbirth = $request->get('dateofbirth');
        $userInfo->age = $request->get('age');
        $userInfo->institution = $request->get('institution');
        $userInfo->mark = $request->get('mark');
        $userInfo->F_name = $request->get('F_name');
        $userInfo->M_name = $request->get('M_name');
        $userInfo->F_occupation = $request->get('F_occupation');
        $userInfo->M_occupation = $request->get('M_occupation');
        $userInfo->bankaccountno = $request->get('bankaccountno');
        $userInfo->bankname = $request->get('bankname');
        $userInfo->bankarea = $request->get('bankarea');
        $userInfo->Micrcodeno = $request->get('Micrcodeno');
        $userInfo->Ifsccodeno = $request->get('Ifsccodeno');
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
            'imgcommunity' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imgplus2mark' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'imgcollegebonafide' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'bankimage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'studentsign' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ])->validate();

        $user = Auth::user();
        $userInfo = Userinfo::find($user->id);

        $fileName = "bankimage-".$user->id. '-'. time() . '.' . $request->bankimage->getClientOriginalExtension();
        $request->bankimage->storeAs('public/upload', $fileName);
        
        $fileName1 = "imgcommunity-".$user->id. '-'. time() . '.' . $request->imgcommunity->getClientOriginalExtension();
        $request->imgcommunity->storeAs('public/upload', $fileName1);
        
        $fileName2 = "imgplus2mark-".$user->id. '-'. time() . '.' . $request->imgplus2mark->getClientOriginalExtension();
        $request->imgplus2mark->storeAs('public/upload', $fileName2);
        
        $fileName3 = "imgcollegebonafide-".$user->id. '-'. time() . '.' . $request->imgcollegebonafide->getClientOriginalExtension();
        $request->imgcollegebonafide->storeAs('public/upload', $fileName3);
        
        $fileName4 = "studentsign-".$user->id. '-'. time() . '.' . $request->studentsign->getClientOriginalExtension();
        $request->studentsign->storeAs('public/upload', $fileName4);
        
                
        $userInfo->bank_image = $fileName;

        $userInfo->imgcommunity = $fileName1;
        $userInfo->imgplus2mark = $fileName2;
        $userInfo->imgcollegebonafide = $fileName3;
        $userInfo->studentsign = $fileName4;

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
