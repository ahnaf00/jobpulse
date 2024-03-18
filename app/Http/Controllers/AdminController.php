<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Models\Owner;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('backend.pages.admin-login');
    }

    public function login(Request $request)
    {
        $count  = Owner::where('email', $request->input('email'))->where('password', $request->input('password'))->select('id', 'role')->first();

        if($count !== null)
        {
            $token = JWTToken::CreateToken($request->input('email'), $count->id, $count->role);

            return response()->json([
                'status' => 'success',
                'message'=> 'Login Successful'
            ])->cookie('token', $token, time()+24*60*60);
        }else
        {
            return response()->json([
                'status' =>'faild',
                'message'=>'unauthorized'
            ]);
        }
    }

    public function logout()
    {
        // return redirect("/userLogin")->cookie('token','', -1);
        return redirect()->route('admin-login')->cookie('token', '', -1);
    }
}
