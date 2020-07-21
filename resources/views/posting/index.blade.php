@extends('layouts.app')

@section('content')
<header class="container  text-white">
    Kategori:<br>
    <div class="container">
        <div class="row">

            @foreach($cat as $category)
            <div class="card bg-dark border border-white">
                <a class="btn btn-dark text-white" href="cat/{{$category->id}}">
                    {{$category->nama_kategori}}
                </a>
            </div>
            @endforeach
       
        </div>
    </div>
</header>
<div class="container bg-secondary text-white" style="padding-top: 100p;">
    <div class="row">
        <div class="col-sm">
            <h2>
                Ayo diliat dulu siapa tau berminat
            </h2>
        </div>
        @auth
            <div class="row-ml-3 float-right">
                <div class="container">

                    <a href="/posting/create">
                        <button class="btn btn-primary border-white">
                            Tambah Posting
                        </button>
                    </a>
                </div>
            </div>
            @endauth


    </div>

</div>
@include('layouts.grid')

@endsection