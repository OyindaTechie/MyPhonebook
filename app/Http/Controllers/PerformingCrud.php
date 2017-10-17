<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Addphonenumber;

use DB;

class PerformingCrud extends Controller
{
    //
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


    public function Viewallcontact(Request $request){
    	
	
 $user = $request->session()->get('useraccess');
  $sql = DB::table('addphonenumbers')->where('user', '=', $user)->get();
  if(count($sql) != 0){
  	return view('viewallcontact',['query'=>$sql],compact('user'));
  }
else{
	echo "wrong query";
}

     
    }

    public function Edit(Request $request, $id){
    	

    	$user = $request->session()->get('useraccess');
    	 $sql = DB::table('addphonenumbers')->where('id', '=', $id)->get();
    	 foreach ($sql as $variable) {
    		# code...
    		$id = $variable -> id;
    		$firstname = $variable -> firstname;
    		$lastname = $variable -> lastname;
    		$phonenumber = $variable -> phonenumber;
    	}

    	return view('edit', compact('user', 'id','firstname', 'lastname', 'phonenumber'));

    	
    }
    public function Update(Request $request, $id){
        
            $user = $request->session()->get('useraccess');
            $firstname = $request->input('firstname');
     		$lastname= $request->input('lastname');
        
     		$phonenumber = $request->input('phonenumber');
      
			DB::table('addphonenumbers')->where('id', $id)
            ->update(['firstname' => $firstname, 'lastname' => $lastname, 'phonenumber' => $phonenumber]);
            echo "record updated successfully, go back and preview";

            
    }

    public function delete(Request $request, $id){
    		$user = $request->session()->get('useraccess');
          
			DB::table('addphonenumbers')->where('id', $id)
            ->delete();
            echo "record deleted successfully, go back and preview";
    }

}
