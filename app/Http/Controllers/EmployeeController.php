<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('employee.index');
    }

    public function insert(Request $request)
    {

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ], [
            'firstname.required' => 'Please Enter Your First Name',
        ], [
            'lastname.required' => 'Please Enter Your last Name',
        ], [
            'email.required' => 'Please Enter Your Email Address',
        ], [
            'password.required' => 'Please Enter Your Password',
            'password.confirmed' => 'Passwords Not Matching',
        ]);


        User::insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'user_type' => $request->userType,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('insert_employee', 'New Employee Successfully Inserted');
    }

    public function details()
    {

        $users = User::where('id', '!=', Auth::id())->get();

        return view('employee.details', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('employee.edit', compact('user'));
    }

    public function update(Request $request)
    {
        User::find($request->user_id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'user_type' => $request->userType,

        ]);

        return redirect('view-all-employee')->with('employee_update', 'Employee Successfully Updated');
    }

    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('view-all-employee')->with('employee_delete', 'Employee Successfully Deleted');
    }

    public function userDashboard()
    {

        return view('user.home');
    }

    public function userRegisterList()
    {
        return view('user.report');
    }
}
