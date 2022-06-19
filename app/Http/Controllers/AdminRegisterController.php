<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AdminRegisterController extends Controller
{
    public function index(){
        return view('dashboard.adminRegister.index', [
            'admins' => User::where('is_admin', true)->get(),
            'users' => User::where('is_admin', false)->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.adminRegister.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'is_admin' => 'min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['is_admin'] = '1';


        User::create($validatedData);

        Alert::success('Congrats', 'Registration Successfull!');
        return redirect('/dashboard/adminRegister');
    }

    public function destroy(User $user, Review $review)
    {   
        $userId = $user->id;
        if($user->is_admin){
            $review = Review::where('user_id', '=', $userId);
            $review->delete();
            User::destroy($user->id);

            return redirect('/dashboard/adminRegister');
        } else {
            $review = Review::where('user_id', '=', $userId);
            $review->delete();
            User::destroy($user->id);

            return redirect('/dashboard/adminRegister');
        }
    }

    public function edit(User $user)
    {
        return view('dashboard.adminRegister.edit', [
            'users' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|min:8|max:255'
        ];

        if($request->username != $user->username){
            $rules['username'] = 'required|min:3|max:12|unique:users';
        }

        if($request->email != $user->email){
            $rules['email'] = 'required|email|unique:users';
        }

        $validateData = $request->validate($rules);

        $validateData['password'] = Hash::make($validateData['password']);
        
        $validateData['id'] = auth()->user()->id;
        $validateData['is_admin'] = '1';

        User::where('id', $user->id)->update($validateData);

        Alert::success('Congrats', 'Admin has been Updated!');
        return redirect('/dashboard/adminRegister');
    }
}
