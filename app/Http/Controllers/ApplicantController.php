<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Applicant;
use App\User;
use App\Skill;
use App\Education;
use App\Work;
use App\Profile;
use DB;
use Illuminate\Support\Facades\Input;
use Log;
// use App\Resume;
// use App\resume;
class ApplicantController extends Controller
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

    public function show($id)  {
       	$job = Job::find($id);   
    	return view('jobpost.application')->withJob($job);
    }

    public function store(Request $request, $id) {
    	$this->validate($request, [
            'application_letter' => 'required'
            
            
        ]);
        $this->validate($request, [
            'file' => 'required'
            
            
        ]);
        Log::info($request->file('file')->getClientOriginalExtension());
        // dd($request->file('resume')->getClientOriginalExtension()); 
        // original code
    	$applicant = new Applicant;
    	$applicant->application_letter = $request->input('application_letter');
        // for resume
        // $path = $request->file('resume')->store( 'avatars', 'public' );
        // Log::alert("$path");
        // $applicant->resume = $request->input('resume');
        // the variable $file has been assigned the resume
        // $file = $applicant->resume;
        // $filename = time().'.'. $applicant->resume->getClientOriginalExtension();
        // $extension = Input::file('resume')->getClientOriginalExtension();
        // $request->resume->move('assets', $filename);
        // $request->resume->move('assets', $extension);
        $applicant->job_id = $request->input('job');
    	$applicant->status = 'pending';
    	$applicant->user_id = auth()->user()->id;   
    	$applicant->save();
        // $data->save()

    	$applicant->jobs()->attach($id);

    	return redirect("userdashboard");
    }

    // public function storeresume(Request $request)
	// {
	// 	$data=new resume();
   	
	// 	$file=$request->file;
		        
	// 	$filename=time().'.'.$file->getClientOriginalExtension();

	// 	$request->file->move('assets',$filename);

	// 	$data->file=$filename;


	// 	// $data->name=$request->name;
	// 	// $data->description=$request->description;

	// 	$data->save();
	// 	return redirect("userdashboard");
	// }

    public function view($id)  {
        $user = User::find($id);        
        $skills = Skill::orderBy('skill', 'asc')->get();     
        $profile = Profile::where('user_id', $id)->first();
        $educations = Education::where('user_id', $id)
                    ->orderBy('created_at', 'desc')
                    ->get();
        $works = Work::where('user_id', $id)
                    ->orderBy('created_at', 'desc')
                    ->get();            
        return view('freelancer.applicant', compact('user', 'profile', 'skills', 'educations', 'works'));
    }
    public function download(Request $request, $resume) 
    {
        return response()->download($applicant->resume);
    }
}
