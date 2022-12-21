<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\counter;
class ProfileController extends Controller
{
    public function index($user){
        
        $user = User::findOrFail($user);
        // dd($user);
        $projects = counter::latest()->paginate(5);
             counter::increment('views');
        //dd($projects);

        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);
        return view('profile.index', compact('user', 'projects'));
    }

    public function edit( User $user)
    {   
        // dd($user->profile->url);
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {
        // $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'required',
            // 'image'=>'required',
        ]);
         //dd($data);

        // if(request('image')){

        // }
         $user->profile->update($data);
        //auth()->user()->profile->update($update);
    
        return redirect("/profile/{$user->id}")->with('message', 'UPdate Successfull');
    }
}
