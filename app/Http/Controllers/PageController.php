<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Profile;
use App\Education;
use App\Work;
use App\Resume;

class PageController extends Controller
{
   public function index() {
	 	
		return view('index');
	}  
	public function storeresume(Request $request)
	{
		$data=new resume();
   	
   	  
		$file=$request->file;
		        
		$filename=time().'.'.$file->getClientOriginalExtension();

		$request->file->move('assets',$filename);

		$data->file=$filename;


		// $data->name=$request->name;
		// $data->description=$request->description;

		$data->save();
		return redirect("userdashboard");
	}

}
