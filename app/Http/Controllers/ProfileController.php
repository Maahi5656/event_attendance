<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function editProfile($id){
        $loggedInUser = User::find($id);

        return view('profile.edit', compact('loggedInUser'));
    }

    public function updateProfile(Request $request){

        // if($request->password != $request->confirmPassword){
        //     return back()->with('error_message','Password Not Matching');
        // }

        if( isset($_POST['changePassword']) ){

            if( is_null($request->password) || is_null($request->confirmPassword) ){
                return back()->with('error_message','Please Enter Your Password Fields');
            }
            elseif( $request->password != $request->confirmPassword ){
                return back()->with('error_message','Password Not Matching');
            }
            else{
                User::find($request->user_id)->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                return back()->with('profile_update','Profile Successfully Updated');
            }
        }else{

            User::find($request->user_id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
           ]);
        }

        return redirect('view-all-employee')->with('profile_update', 'Profile Successfully Updated');
    }
}
