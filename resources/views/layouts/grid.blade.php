<div class="container">
  <div class="card-columns">
    @foreach($postings as $posting)
    <div class="card  bg-dark text-white border-white">
      <div class="container rounded" style="background-color: black;">
        @foreach($posting->postingPhotos as $photos)
          @if($loop->first) 
            <img style="  object-fit: contain;" class="card-img-top rounded" height="300" src=" {{asset('photo/'.$photos->photo)}}">
          @endif
        @endforeach
      </div>
      <div class="card-body">
        <h3 class="card-text">{{$posting->judul}}</h3>
        <h5 class="card-text">Rp. {{$posting->harga}}</h5>
        <p class="card-text">{{$posting->deskripsi}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/posting/{{$posting->id}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
            @if($you==$posting->user_id)
            <a href="/posting/{{$posting->id}}/edit" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
            <a href="/posting/{{$posting->id}}/delete" type="button" class="btn btn-sm btn-outline-secondary">Delete</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>