@extends('layouts.app')

@section('content')

<div class="container bg-secondary text-white">
    <h2>
        Kategori = {{$cat->nama_kategori}}
    </h2>
</div>
@include('layouts.grid')

@endsection