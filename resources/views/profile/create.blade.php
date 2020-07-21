@extends('layouts.app')

@section('content')
<div class="flex-center position-ref height: 600px bg-secondary text-white">
    <div class="container">
        <form method="post" action="/profile" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('GET') }}
            <h2>buat profile</h2>
         @include('profile.form')

    </div>

    </form>



</div>

</body>
@endsection