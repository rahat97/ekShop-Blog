@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Top Stories Edit </li>
            </ol>

        <form action="{{route('TopStories.update',$topStories->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Image</h3>
                        
                        

                <img style="height: 30vh" src="{{url($topStories->photo)}}"class="img-thumbnail">
                <input type="file" id="photo" name="photo">

                </div>
                <div class="form-gorup col-md-4 mt-3">
                    <div class="mb-3" >
                        
                    <input type="text" class="form-control" placeholder=" Title.." id="title" name="title" value="{{$topStories->title}}">
                    </div>
                    <div class="mb-5" >
                        
                        <textarea class="form-control" id="mytextarea" name="text" rows="3"></textarea>
                    </div>
                    
                </div>

            </div>
            <input type="Submit" name="submit" value="Submit Here"class="btn btn-success mt-5">
        </div>
    </form>
   
    </main>
    

@endsection
