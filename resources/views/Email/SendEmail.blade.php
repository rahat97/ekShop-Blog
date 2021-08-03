@extends('layouts.admin_layout')
@section('content')
    <main>

        <div class="container-fluid">
            <h1 class="mt-4" Class="text-mute">Compose Email</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Email-Send</li>
            </ol>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email"  class="form-control" id="exampleFormControlInput1" value="{{$emailModels->subscribeEmail}}">
              </div>

              <div class="mb-2">
                <label for="exampleFormControlInput2" class="form-label"></label>
                <input type="email"  class="form-control" placeholder=" Write Email Subject " id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Email Description Here" rows="8"></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-info"> Send</button>
              </div>
            </form>
        </div>
    </main>

@endsection