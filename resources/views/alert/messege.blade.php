@if ($errors->any())
   
        <ul>
            @foreach ($errors->all() as $error)
             <div class="alert alert-danger alert-dismissible ">
                 <button type="button" class="close"data-dismiss="alert">&times;</button>
             <strong>Error</strong>{{$error}}

             </div>
            @endforeach
        </ul>
   
@endif

