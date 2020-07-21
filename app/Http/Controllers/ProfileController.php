<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProfileRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Profile;
use App\Posting;

use Storage;
use Validator;

use App\User;

class ProfileController extends Controller
{
    public function index($id)
    {
       
        $halaman = 'profile';
        $user = User::find($id);
        $you = Auth::id();
        $prof = Profile::find($id);

        $postings = $user->posting;
    
        return view('profile.show', compact('halaman', 'prof', 'user', 'postings', 'you'));

    }
    public function create()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $halaman = 'profile';
            return view('profile.create', compact('halaman', 'id'));
        }
    }
   
    public function store(ProfileRequest $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $id = Auth::id();
            $input = new Profile;
            $input->id = $user->id;
            $input->user_id = $user->id;
            if ($request->hasFile('avatar')) {
                $ava = $request->file('avatar');
                $ekstensi = $ava->getClientOriginalExtension();
                if ($request->file('avatar')->isValid()) {
                    $foto_name = date('YmdHis') . ".$ekstensi";
                    $upload_path = 'avatar';
                    $request->file('avatar')->move($upload_path, $foto_name);
                    $input['avatar'] = $foto_name;
                }
            }
            if ($request->hasFile('backdrop')) {
                $ava = $request->file('backdrop');
                $ekstensi = $ava->getClientOriginalExtension();
                if ($request->file('backdrop')->isValid()) {
                    $foto_name = date('YmdHis') . ".$ekstensi";
                    $upload_path = 'backdrop';
                    $request->file('backdrop')->move($upload_path, $foto_name);
                    $input['backdrop'] = $foto_name;
                }
            }
            $input->display_name = $request->display_name;
            $input->alamat = $request->alamat;
            $input->bio = $request->bio;
            $input->save();
            

            return redirect('/profile/' . $id);

        }
    }
    public function edit()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $halaman = 'profile';
            $profile = Profile::find($id);

            return view('profile.edit', compact('halaman', 'profile', 'id'));
        }
    }
    public function update(Request $request)
    {
        $id = Auth::id();
        $input = Profile::find($id);
        if ($request->hasFile('avatar')) {

            $ava = $request->file('avatar');
            $ekstensi = $ava->getClientOriginalExtension();
            if ($request->file('avatar')->isValid()) {
                $ava_name = date('YmdHis') . ".$ekstensi";
                $upload_path = 'avatar';
                $request->file('avatar')->move($upload_path, $ava_name);
                $input->avatar = $ava_name;
            }
        }
        if ($request->hasFile('backdrop')) {
            $ava = $request->file('backdrop');
            $ekstensi = $ava->getClientOriginalExtension();
            if ($request->file('backdrop')->isValid()) {
                $backdrop_name = date('YmdHis') . ".$ekstensi";
                $upload_path = 'backdrop';
                $request->file('backdrop')->move($upload_path, $backdrop_name);
                $input->backdrop = $backdrop_name;
            }
        }
        $input->display_name = $request->display_name;
        $input->bio = $request->bio;
        $input->alamat = $request->alamat;
        $input->save();
        return redirect('/profile/' . $id);
    }
}
