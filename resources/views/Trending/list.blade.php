@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Of Trending</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List Of Trending</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @if(count($trendings)>0)
                  @foreach ($trendings as $trending)
                      <tr>
                      <th scope="row">{{$trending->id}}</th>
                          <td>{{$trending->title}}</td>
                          <td>{{$trending->imgTrending}}</td>
                          <td>{{Str::limit(strip_tags($trending->mytextarea),50)}}</td>
                          
                          <td>
                              <div class="row">
                                  <div class="col-sm">
                                  <a href="{{route('trending.edit',$trending->id)}}" class="btn btn-primary">Edit</a>
                                  </div>
                                  <div class="col-sm-6">
                                  <form action="{{route('trending.delete', $trending->id)}}" method="POST">
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