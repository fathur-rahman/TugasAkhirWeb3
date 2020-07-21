@extends('layouts.app')

@section('content')
<div class="flex-center position-ref height: 600px bg-secondary text-white">
    <div class="container">
        <form method="POST" action="/profile/update" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('GET') }}
            <h2>edit profile</h2>
         @include('profile.form')

    </div>

    </form>



</div>

</body>
@endsection