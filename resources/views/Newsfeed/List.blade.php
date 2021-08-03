@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Of Newsfeed</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List Of Newsfeed</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TiTle</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($newsfeeds)>0)
                  @foreach ($newsfeeds as $newsfeed)
                      <tr>
                      <th scope="row">{{$newsfeed->id}}</th>
                          <td>{{$newsfeed->title}}</td>
                          <td>{{$newsfeed->imgnewsfeed}}</td>
                          <td>{{Str::limit(strip_tags($newsfeed->mytextarea),50)}}</td>
                          
                          <td>
                              <div class="row">
                                  <div class="col-sm">
                                  <a href="{{route('Newsfeed.edit',$newsfeed->id)}}" class="btn btn-primary">Edit</a>
                                  </div>
                                  <div class="col-sm-6">
                                  <form action="{{route('Newsfeed.delete', $newsfeed->id)}}" method="POST">
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
              <button class="btn btn-link">{{$newsfeeds->links('pagination::bootstrap-4')}}</button>
    </main>

@endsection