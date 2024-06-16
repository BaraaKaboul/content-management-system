<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements \App\Interface\UserRepositoryInterface
{
    public function index()
    {
        try {
            $users = User::where('id','!=',auth()->user()->id)->paginate(5);
            return view('Users.index',compact('users'));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try {
            $user = User::findOrFail($request->id);
            $user->delete();

            return redirect()->back();
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Users.edit',compact('user'));
    }

    public function update($request)
    {
        try {
            $updateUser = User::findOrFail($request->id);
            $updateUser->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'status'=>$request->status,
            ]);
            return to_route('dashboard.users.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }

    }

    public function createUser()
    {
        return view('Users.add');
    }

    public function store($request)
    {
        try {
            $data = [
                'name' => 'required|string',
                'status' => 'nullable|in:disable,admin,writer',// in يعني انو بياخد كذا حالة, يعني متل array
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ];
            $validatedData = $request->validate($data);

            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'status'=>$request->status,
                'password'=>Hash::make($request->password),
            ]);
            return to_route('dashboard.users.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }
    }
}
