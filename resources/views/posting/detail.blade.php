@extends('layouts.app')

@section('content')
<div class="container text-white">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>{{$posting->judul}}</h2>
            </div>
            <div class="row-ml-3 float-right">
                @if($you==$posting->user_id)
                <a href="/posting/{{$posting->id}}/edit" type="button" class="btn btn-dark">Edit</a>
                @else

                dijual oleh
                <a href="/profile/{{$posting->user_id}}" type="button" class="btn btn-dark">{{$profile->display_name}}</a>

                @endif

            </div>
        </div>
    </div>

    <div class="card-columns">
        @foreach($posting->postingPhotos as $photos)
        <div class="col-sm">
            <div class="card  bg-dark text-white border-white">
                <img style="object-fit: contain;" class="card-img-top rounded" height="300" src="{{asset('photo/'.$photos->photo)}}">

            </div>
        </div>
        @endforeach
    </div>
    <div class="container text-white">

        <h5>Rp. {{$posting->harga}}</h5>
        <h5>{{$posting->keterangan_khusus}}</p>
            <div class="container border rounded border-white">
                <p class="card-text">deskripsi:<br>{{$posting->deskripsi}}</p>
            </div>
    </div>
    <div class="container">
        <div class="container text-white rounded border  border-white ">
            comments

            @foreach($posting->comment as $comment)
            <div class="container border rounded border-white bg-dark">
                <h5>{{$comment->body}}</h5>
            </div>
            @endforeach
            <div class="flex-center position-ref height: 600px bg-secondary text-white">
                <form method="POST" action="/comment/{{$posting->id}}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('GET') }}
                    <div class="form-group">
                   
                    @guest
                        <input type="text" name="body" class="form-control" disabled placeholder="Login dulu sebelum komentar" value="{{ old('body') }}">
                    @endguest
                    @auth
                        <input type="text" name="body" class="form-control"  placeholder="Komentar di sini" value="{{ old('body') }}">
                        @if($errors->has('body'))
                        <div class="text-danger">
                            {{ $errors->first('body')}}
                        </div>
                        @endif
                        
                    </div>
                    <div class="form-group">
                        <center>
                            <input type="submit" class="btn btn-success">
                        </div>
                    @endauth
                </form>
            </div>

        </div>
    </div>
</div>
@endsection