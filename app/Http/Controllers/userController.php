<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    public function create(Request $request)
    {
        // dd($request);
        $formfield = $request->validate([
            'name' => 'required|min:3',
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'faculty' => 'required|min:3',
            'type' => 'min:3',
            'number' => 'min:3',
            'course' => 'required|min:3',
            'level' => 'max:10',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);
        $formfield['password'] = bcrypt($formfield['password']);
        $user = User::create($formfield);
        if ($request->type != null) {
            return redirect('/usermanage')->with('success', '  account created successfully');
        } else {
            if ($user) {
                auth()->login($user);
                return redirect('/')->with('success', 'account created successfully');
            } else {
                return back()->with('error', 'error when creating an  account');
            }
        }
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'log out successful');
    }
    public function authenticate(Request $request)
    {
        $formfield = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:3',
        ]);

        if (Auth::attempt(['email' => $formfield['username'], 'password' => $formfield['password']]) || Auth::attempt(['username' => $formfield['username'], 'password' => $formfield['password']])) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'login successfull');
        } else {
            return back()->with('error', 'invalid user');
        }
    }
    public function destroy(Request $request)
    {
        if (auth()->user()->type == 'developer' || auth()->user()->type == 'administrator') {
            $user = User::find($request->id);
            if ($user->type == 'developer') {
                return back()->with('error', 'this user can not be deleted!!!');
            } else {
                $user->delete();
                return back()->with('success', 'delete successful');
            }
        } else {
            return back()->with('error', 'unauthorized user!!!!');
        }
    }

    public function updateprofile(Request $request)
    {
        if ($request->hasFile('profileimg')) {
            //  dd($request->file('profileimg'));

            $user=User::find($request->id);

            if($user->profileimg != 'profile/default.png'){
                Storage::delete(['public/'.$user->profileimg]);
              }
            $user->profileimg = $request->file('profileimg')->store('profile','public');

            $user->save();

            return back()->with('success','profile updated');
        }
    }
}