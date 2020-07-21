<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostingRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Posting;
use App\Category;
use App\Comment;
use App\PostingPhotos;
use App\User;

use Illuminate\Support\Facades\Storage;

class PostingController extends Controller
{
    //
    public function index()
    {
        $halaman = 'posting';
        $postings = Posting::all();
        $you = Auth::id();
        $cat = Category::all();
        return view('posting.index', compact('halaman', 'postings', 'cat', 'you'));

    }
    public function show($id)
    {
        $posting = Posting::find($id);
        $user = User::findorFail($posting->user_id);
        $profile = $user->profile;
        $halaman = 'posting';
        $you = Auth::id();
        $cat = Category::all();
        return view('posting.detail', compact('halaman', 'posting', 'cat', 'you','profile'));
    }
    public function cat($id)
    {
        $halaman = 'posting';
        $cat = Category::find($id);
        $you = Auth::id();

        $postings = $cat->posting;
        return view('posting.category', compact('halaman', 'postings', 'cat', 'you'));
    }

    public function create()
    {
        if (Auth::check()) {

            $id = Auth::id();
            $categories = Category::all();
            $halaman = 'posting';
            return view('posting.create', compact('halaman', 'id', 'categories'));
        } else {
            return view('auth.login');
        }
    }

    public function store(PostingRequest $request)
    {
        $id = Auth::id();

        $posting = new Posting;
        $posting->user_id = $id;
        $posting->category_id = $request->category_id;
        $posting->judul = $request->judul;
        $posting->keterangan_khusus = $request->keterangan_khusus;
        $posting->harga = $request->harga;
        $posting->deskripsi = $request->deskripsi;
        $posting->save();

        foreach ($request->photo as $photo) {
            if ($request->hasFile('photo')) {
                $foto = $request->file('photo');
                $ekstensi = $photo->getClientOriginalExtension();
                $foto_name = date('YmdHis') . rand(000, 999) . ".$ekstensi";
                
                $upload_path = 'photo';
                $photo->move($upload_path, $foto_name);
                $fff = new PostingPhotos;
                $fff->posting_id = $posting->id;
                $fff->photo = $foto_name;
                $fff->save();
            }
        }
        return redirect('/');
    }
    public function edit($id)
    {
        $posting = Posting::find($id);
        $halaman = 'posting';
        $you = Auth::id();
        $categories = Category::all();
        return view('posting.edit', compact('halaman', 'posting', 'categories', 'you'));
    }
    public function update($id, Request $request)
    {
        $posting=Posting::find($id);
        $posting->category_id = $request->category_id;
        $posting->judul = $request->judul;
        $posting->keterangan_khusus = $request->keterangan_khusus;
        $posting->harga = $request->harga;
        $posting->deskripsi = $request->deskripsi;
     
        $posting->save();

        return redirect('/posting/'.$id);
    }
    public function delete($id)
    {
        $posting=Posting::find($id);
        $photo = Storage::delete($posting->photo);
        $posting->delete();
        return redirect('/');
    }
    public function comment($id, Request $request)
    {
        $posting=Posting::find($id);
        $input=new Comment();
        $input->user_id=Auth::id();
        $input->posting_id=$posting->id;
        $input->body=$request->body;
        $input->save();
        return redirect('/posting/'.$posting->id);

    }
 
}
