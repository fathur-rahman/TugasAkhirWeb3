<div class="row">

    <div class="form-group col-sm">
        <label> Avatar</label>
        <input type="file" name="avatar" class="form-control" onchange="previewz()">
        @if(isset($profile))
        <img src="{{asset('avatar/'.$profile->avatar)}}" style="object-fit: cover;" height="100p" alt="" id="framez">
        @endif
        @if($errors->has('avatar'))
        <div class="text-danger">
            {{ $errors->first('avatar')}}
        </div>
        @endif
    </div>
    <div class="form-group col-sm">
        <label>Backdrop</label>
        <input type="file" name="backdrop" class="form-control" onchange="preview()">
        @if(isset($profile))
        <img src="{{asset('backdrop/'. $profile->backdrop)}}" style="  object-fit: cover;" height="200p" alt=""  id="frame">
        @endif
        <script>
                        function preview() {
                            frame.src = URL.createObjectURL(event.target.files[0]);
                        }
                        function previewz() {
                            framez.src = URL.createObjectURL(event.target.files[0]);
                        }
                        
                    </script>
        @if($errors->has('backdrop'))
        <div class="text-danger">
            {{ $errors->first('backdrop')}}
        </div>
        @endif

    </div>
</div>

<div class="form-group">
    <input hidden type="text" name="id" value="{{$id}}">
    <input hidden type="text" name="user_id" value="{{$id}}">
</div>
<div class="form-group">
    <label>Display name</label>
    <input type="text" name="display_name" class="form-control" placeholder="Display name" value="@if(isset($profile)){{$profile->display_name}}@endif">

    @if($errors->has('display_name'))
    <div class="text-danger">
        {{ $errors->first('display_name')}}
    </div>
    @endif

</div>
<div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" placeholder="alamat" value="@if(isset($profile)){{ $profile->alamat}}@endif">

    @if($errors->has('alamat'))
    <div class="text-danger">
        {{ $errors->first('alamat')}}
    </div>
    @endif

</div>
<div class="form-group">
    <label>Bio</label>
    <input type="text" name="bio" class="form-control" placeholder="bio" value="@if(isset($profile)){{$profile->bio }}@endif">

    @if($errors->has('bio'))
    <div class="text-danger">
        {{ $errors->first('bio')}}
    </div>
    @endif

</div>
<div class="form-group">
    <center>
        <input type="submit" class="btn btn-success">
</div>