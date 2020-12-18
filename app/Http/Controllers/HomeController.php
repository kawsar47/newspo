<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }



    public function insert()
    {
        return view('backend.role.insert');
    }

    public function store(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['category']=$request->category;
        $data['division']=$request->division;
        $data['post']=$request->posts;
        $data['setting']=$request->setting;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['role']=$request->role;
        $data['type']=0;

//        return response()->json($data);
        DB::table('users')->insert($data);
        $notification=array(
            'messege'=>'Successfully Writer Created',
            'alert-type'=>'success'
        );

        return Redirect()->route('all.writer')->with($notification);

    }



    public function allwriter()
    {
        $writer=DB::table('users')->where('type',0)->get();
        return view('backend.role.index',compact('writer'));
    }

    public function edit($id)
    {
        $writer=DB::table('users')->where('id',$id)->first();
        return view('backend.role.edit',compact('writer'));
    }

    public function destory($id)
    {

        DB::table('users')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully Deleted ',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }





    public function Update(Request $request,$id)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['category']=$request->category;
        $data['division']=$request->division;
        $data['post']=$request->post;
        $data['setting']=$request->setting;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['role']=$request->role;


//        return response()->json($data);

        DB::table('users')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Successfully Writer Updated',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.writer')->with($notification);
    }








}
