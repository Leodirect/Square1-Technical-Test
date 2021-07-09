<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class BirthdayController extends Controller
{
    public function update(Request $request)
    {
        $userUpdate = User::where('id','=',$request->get('id'))->update([
            'birthday'=>$request->get('birthday')
        ]);
        return view('login');
    }


}