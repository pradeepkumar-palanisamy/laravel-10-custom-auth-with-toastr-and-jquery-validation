<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Mckenziearts\Notify\LaravelNotifyServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Authentication_Controller extends Controller
{
    public function registration()
    {

        return view('registration');
    }
    public function login()
    {

        return view('login');
    }
    public function dashboard()
    {
            $id = Session::all()['UserID'];
            $user = DB::table('custom_user')->where('id',$id)->first();
                
        return view('dashboard',["user"=>$user]);
    }

    public function Post_reg(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:custom_user|min:3|max:15',
            'email' => 'required|unique:custom_user|email',
            'password' => 'required|min:5',
            'confirm_password' => 'required|same:password',
        ], [
            'username.required' => 'Username is required',
            'username.unique' => 'Username is already taken',
            'username.min' => 'Username must be at least 3 characters',
            'username.max' => 'Username can be up to 15 characters',
            'email.required' => 'Please Enter Your email address',
            'password.required' => 'Please Enter your password'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $result = $user->save();
        if ($result) {
            emotify('success', 'You have registerd sucessfully');
            return redirect('login');
        } else {
            emotify('error', 'Something went wrong');
            return back();
        }
    }

    public function post_login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Please enter your username',
            'password.required' => 'Please enter your password',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if (!$user) {
            emotify('error', 'Your Account doesnt Exist');
            return back();
        } else {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('UserID', $user->id);
                emotify('success', 'Welcome to your dashboard');
                return redirect('dashboard');
            } else {
                emotify('error', 'Your Password is incorrect');
                return back();
            }
        }
    }

    public function logout()
    {
        if (Session()->has('UserID')) {
            Session()->pull('UserID');
            emotify('success', 'You have Logged out Successfully');
            return redirect('login');
        }
    }
}
