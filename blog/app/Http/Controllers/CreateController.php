<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required',
            'password' => 'required',
        ]);
        if ($request->get('birthday')!= null){
            if ($request->get('password') == $request->get('verify_password')){
                $userCheck = User::where('email', '=',$request->get('email'))->first();
                if ($userCheck === null){
                    $user = new User([
                        'name'    =>  $request->get('name'),
                        'email'     =>  $request->get('email'),
                        'password' => Hash::make($request->get('password')),
                        'remember_token' => str_random(30) ,
                        'birthday' => $request->get('birthday'),
                    ]);
                    $user->save();
                    return view('sucessregister');
                }
                else{
                    return back()->with('error', 'This email is already used');
                }
            }
            else{
                return back()->with('error', 'The two password is not the same');
            }
        }
        else{
            return back()->with('error', 'You missed to enter the date of birthday');
        }


    }


}