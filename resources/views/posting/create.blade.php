@extends('layouts.app')

@section('content')



<body>

    <div class="flex-center position-ref height: 600px bg-secondary text-white">
        <div class="container">
            <form method="POST" action="/posting" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('GET') }}
                <div id="formulario">
                    <div id="dynamicInput[0]">
                        Entry 1<br>
                        <input type="file" name="photo[]" onchange="preview();">
                    <img src="" id="frame" alt="" height="150px">


                    <script>
                        function preview() {
                            frame.src = URL.createObjectURL(event.target.files[0]);
                        }
                    </script>
                        <input type="button" class="btn btn-light" value="+" onClick="addInput();">

                        @if($errors->has('photo'))
                        <div class="text-danger">
                            {{ $errors->first('photo')}}
                        </div>
                        @endif
                    </div>
                </div>

                @include('posting.form')
        </div>

        </form>
        <script>
        var counter = 1;
        var dynamicInput = [];

        function addInput() {
            var newdiv = document.createElement('div');
            newdiv.id = dynamicInput[counter];
            newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='file' name='photo[]' onchange='preview();'><img src='' id='frame' height='150px'> <input type='button' class='btn btn-danger' value='-' onClick='removeInput(" + dynamicInput[counter] + ");'>";
            document.getElementById('formulario').appendChild(newdiv);
            counter++;
        }

        function removeInput(id) {
            // var counter--;
            var elem = document.getElementById(id);
            return elem.parentNode.removeChild(elem);
        }
    </script>



    </div>

</body>
@endsection