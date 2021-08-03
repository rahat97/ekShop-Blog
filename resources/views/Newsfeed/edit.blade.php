@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Newsfeed </li>
            </ol>

        <form action="{{route('Newsfeed.update' ,$newsfeeds->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
      
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Image</h3>
                <img style="height: 30vh" src="{{url($newsfeeds->imgnewsfeed)}}" class="img-thumbnail">
                <input type="file" id="imgnewsfeed" name="imgnewsfeed" >

                </div>
                <div class="form-gorup col-md-4 mt-3">
                    <div class="mb-3" >
                        <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$newsfeeds->title}}">
                    </div>
                    <div class="mb-5" >
                        <label for="description"><h4>Description</h4></label>
                        <textarea class="form-control" id="mytextarea" name="mytextarea" rows="6" value="{{$newsfeeds->mytextarea}}"></textarea>
                    </div>
                </div>

            </div>
            <input type="Submit" name="submit" value="Submit Here"class="btn btn-success mt-5">
        </div>
    </form>
    </main>

@endsection
