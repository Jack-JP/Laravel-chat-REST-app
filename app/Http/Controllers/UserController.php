<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function show($id)
    {

      $user = new UserResource(User::findOrFail($id));
      return view('user.show')->with('user', $user);
    }

    public function edit($id)
    {
      $user = new UserResource(User::findOrFail($id));

      return view('user.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {



        // Save content
        $var = User::findOrFail($id);
        $var->name = $request->input('name');
        $var->email = $request->input('email');
        $var->save();
        
        // redirect
        return redirect()->route('user.show', $var->id);
    }

    public function destroy($id)
    {
        return 'user delete';
    }
}
