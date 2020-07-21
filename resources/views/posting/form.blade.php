
 <div class="form-group">
     <label>Judul</label>
     <input type="text" name="judul" class="form-control" placeholder="judul" value="{{ $posting->judul ?? '' }}">

     @if($errors->has('judul'))
     <div class="text-danger">
         {{ $errors->first('judul')}}
     </div>
     @endif

 </div>
 <div class="form-group">
     <label>Kategori</label>
     <select type="text" name="category_id" class="form-control" placeholder="" value="{{ old('category_id') }}">
         @foreach($categories as $category)
         <option value="{{$category->id}}">{{$category->nama_kategori}}</option>
         @endforeach
     </select>
     @if($errors->has('category_id'))
     <div class="text-danger">
         {{ $errors->first('category_id')}}
     </div>
     @endif
 </div>
 <div class="form-group">
     <label>Keterangan khusus</label>
     <input type="text" name="keterangan_khusus" class="form-control" placeholder="keterangan_khusus" value="{{ old('keterangan_khusus',$posting->keterangan_khusus??'')}}">

     @if($errors->has('keterangan_khusus'))
     <div class="text-danger">''
         {{ $errors->first('keterangan_khusus')}}
     </div>
     @endif

 </div>
 <div class="form-group">
     <label>Harga</label>
     <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ old('harga',$posting->harga??'') }}">

     @if($errors->has('harga'))
     <div class="text-danger">
         {{ $errors->first('harga')}}
     </div>
     @endif

 </div>
 <div class="form-group">
     <label>Deskripsi</label>
     <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="{{ old('deskripsi',$posting->deskripsi??'') }}">

     @if($errors->has('deskripsi'))
     <div class="text-danger">
         {{ $errors->first('deskripsi')}}
     </div>
     @endif

 </div>
 <div class="form-group">
     <center>
         <input type="submit" class="btn btn-success" value="Simpan">
 </div>
