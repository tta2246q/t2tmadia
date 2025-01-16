<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // Index
    public function index(){
        $user = User::all();
        return view('admin.pages.account.index', compact('user'));
    }

    // Add Account
    public function add(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/account');

    }
    public function Edit(){
        return view('admin.pages.account.Edit');
    }
    public function Detail(){
        return view('admin.pages.account.Detail');
    }
}