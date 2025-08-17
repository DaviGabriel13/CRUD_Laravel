 @if (session('Sucess'))
     <div class="alert alert-success" role="alert">
         {{ session('Sucess') }}
     </div>
 @endif



 @if ($errors->any())

     <div class="alert alert-danger" role="alert">
         @foreach ($errors->all() as $error)
             {{ $error }} <br>
         @endforeach
     </div>
 @endif
