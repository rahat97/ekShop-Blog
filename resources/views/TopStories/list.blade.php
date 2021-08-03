@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Of Top Stories</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List Of Top Stories</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">TiTle</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @if(count($topStories)>0)
                  @foreach ($topStories as $topstories)
                      <tr>
                      <th scope="row">{{$topstories->id}}</th>
                          <td>{{$topstories->title}}</td>
                          <td>{{$topstories->photo}}</td>
                          <td>{{Str::limit(strip_tags($topstories->text),50)}}</td>
                          
                          <td>
                              <div class="row">
                                  <div class="col-sm">
                                  <a href="{{route('TopStories.edit',$topstories->id)}}" class="btn btn-primary">Edit</a>
                                  </div>
                                  <div class="col-sm-6">
                                  <form action="{{route('TopStories.delete',  $topstories ->id)}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <input type="submit" class="btn btn-danger" name="submit" value="Delete" >
                                  </form>
                                </div> 
                              </div>
                          </td>
                      </tr>
                  @endforeach
                  @endif


                </tbody>
              </table>
    </main>

@endsection