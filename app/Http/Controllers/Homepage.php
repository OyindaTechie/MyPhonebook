<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Register ;

class Homepage extends Controller
{
    //
    function Register(Request $request){
    	$firstname = $request->input('firstname');
        $lastname= $request->input('lastname');
        $username = $request->input('username');
        $password = $request->input('password');
        $phonenumber = $request->input('phonenumber');
       
	Register::create($request->except('_token'));
//DB::insert('insert into registers (firstname, lastname,username,password, phonenumber) values(?,?,?,?,?)',[  $firstname, $lastname, $username, $password, $phonenumber]);

	return view('accountcreated');
    }

    public function Login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');
       

        $checkLogin = DB::table('registers')->where(['username'=> $username, 'password' => $password])->get();

      if(count($checkLogin)  > 0)
      {
       //echo "Login SuccessFull<br/>";
      	$request->session()->put('useraccess',$username);
      	$user = $request->session()->get('useraccess');
      	return view('usersdashboard', compact('user'));
      }
      else
      {
       echo "Login Faield Wrong Data Passed";
      }
    	//DB::select('insert into registers (firstname, lastname,username,password, phonenumber) values(?,?,?,?,?)',[  $firstname, $lastname, $username, $password, $phonenumber]);
    }
    public function Addupnumbers(Request $request){
    	
	//Addphonenumber::create($request->except('_token'));

	$firstname = $request->input('firstname');
     $lastname= $request->input('lastname');
        
     $phonenumber = $request->input('phonenumber');
      //$user = $request->input('user');
     $user = $request->session()->get('useraccess');

     DB::insert('insert into addphonenumbers (firstname, lastname,phonenumber,user) values(?,?,?,?)',[  $firstname, $lastname, $phonenumber,$user]);
     	echo "Account added successfully";
    }
public function Addup(Request $request){
	$user = $request->session()->get('useraccess');
	 return view('addupnumber',compact('user'));
}
   public function Logout(Request $request){
    	$request->session()->forget('useraccesss');
    	return view('start');

    }
}
