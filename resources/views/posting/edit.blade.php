@extends('layouts.app')

@section('content')

<body>
    <div class="container">

        <div class="card-columns">
            @foreach($posting->postingPhotos as $photos)
            <div class="col-sm">
            <div class="card  bg-dark text-white border-white">
                <img style="object-fit: cover;" class="card-img-top rounded" height="100%" src="{{asset('photo/'.$photos->photo)}}">
                
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="flex-center position-ref height: 600px bg-secondary text-white">
        <div class="container">
            <form method="PUT" action="/posting/{{$posting->id}}/update" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('GET') }}
          
                @include('posting.form')
            </div>
            
        </form>
    </div>
        
        
        
    </div>
  
</body>
@endsection