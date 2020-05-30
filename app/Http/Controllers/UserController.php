<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }
    public function confirmPayment()
    {
        $users=User::where('payment','=','unpaid')->whereNotNull('approved_at')->get();
        return view('confirmPayment',compact('users'));
    }
    public function confirm(Request $request, $user_id)
    {
        $user=User::findOrFail($user_id);
        $user->update(['payment'=>$request->payment]);
        return redirect('/confirmPayment')->withMessage('Payment Updated Successfully');
    }
    public function userProfile($user_id)
    {
        //dd($user_id);
        $userDetails=User::where('id','=',$user_id)->get();
        return view('userProfile',compact('userDetails'));
    }

    //create admin add and delete option
    public function create()
    {
        return view('admin.createUser');
    } 
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/addUser')->withMessage('User Created Successfully');
    }
    public function deleteIndex()
    {
        $deleteUser=User::whereNull('email_verified_at')->get();
        return view('admin.deleteIndex',compact('deleteUser'));
    }
    public function delete($user_id)
    {
        $user =User::where('id',$user_id)->first()->delete();
        return redirect('/deleteUser')->withMessage('User Deleted Succesfully');
    }
}
