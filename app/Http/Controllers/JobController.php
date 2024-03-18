<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobListPage(Request $request)
    {
        $role = $request->header('role');
        return view('backend.pages.jobList', ['role'=>$role]);
    }

    public function CreateJob(Request $request)
    {
        try
        {
            $company_id = $request->header('id');
            $job = Job::create([
                'title'         =>  $request->input('title'),
                'description'   =>  $request->input('description'),
                'company_id'    =>  $company_id
            ]);
            return $job;
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function jobList(Request $request)
    {
        $company_id = $request->header('id');
        $job = Job::where('company_id', $company_id)->with('company')->get();
        return $job;
    }

    public function updateJob(Request $request)
    {
        $job_id = $request->input('id');

        try{

            $job = Job::where('id', $job_id)->update([
                'title' => $request->input('title'),
                'description' =>$request->input('description'),
                'status' => $request->input('status')
            ]);

            return $job;
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function jobById(Request $request)
    {
        try
        {
            $job_id = $request->input('id');

            $job = Job::where('id', $job_id)->get();
            return $job;
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function deletJob(Request $request)
    {
        try
        {
            $job_id = $request->input('id');
            $job = Job::where('id', $job_id)->delete();
            return $job;
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }


    public function getAllJobs(Request $request)
    {
        $job = Job::all();
        return $job;
    }

}
