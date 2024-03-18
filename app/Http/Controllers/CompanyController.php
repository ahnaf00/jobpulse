<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Models\Company;
use Exception;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyListPage()
    {
        return view('backend.pages.companylist');
    }

    public function companyRegistrationPage()
    {
        return view('backend.pages.company-registration');
    }

    public function companyLoginPage()
    {
        return view('backend.pages.company-login');
    }

    public function companyRegistration(Request $request)
    {
        try
        {
            Company::create([
                'name'      => $request->input('name'),
                'email'     => $request->input('email'),
                'password'  => $request->input('password')
            ]);

            return response()->json([
                'status' => 'success',
                'message' =>'User registration successful'
            ]);
        }
        catch(Exception $exception)
        {
            return response()->json([
                'status'    =>  'failed',
                'message'   =>  $exception->getMessage()
            ]);
        }
    }

    public function companyLogin(Request $request)
    {
        $count  = Company::where('email', $request->input('email'))->where('password', $request->input('password'))->select('id', 'role')->first();

        if($count !==  null)
        {
            $token = JWTToken::CreateToken($request->input('email'), $count->id, $count->role);

            return response()->json([
                'status'    => 'success',
                'message'   => 'Login successful'
            ])->cookie('token', $token, time()+24*60*60);
        }
        else
        {
            return response()->json([
                'status'    =>  'failed',
                'message'   =>  'unauthorized'
            ]);
        }
    }


    public function companyList()
    {
        $company = Company::all();
        return $company;
    }

    public function updateCompany(Request $request)
    {
        $company_id = $request->input('id');

        try{
            $company = Company::where('id', $company_id)->update([
                'name'      => $request->input('name'),
                'email'     => $request->input('email'),
                'status'    => $request->input('status')
            ]);

            return $company;
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function companyById(Request $request)
    {
        try
        {
            $company_id = $request->input('id');
            $company = Company::where('id', $company_id)->get();
            return $company;
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function deleteCompany(Request $request)
    {
        try
        {
            $company_id = $request->input('id');
            $company = Company::where('id', $company_id)->delete();
            return $company;
        }catch(Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function logout()
    {
        return redirect()->route('company-login-view')->cookie('token', '', -1);
    }
}
