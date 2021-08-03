@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Of Subscribed Email</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List Of Subscribed Email</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    
                    <th scope="col">Email</th>
                   <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @if(count($emailModels)>0)
                  @foreach ( $emailModels as $emailModel) 
                      <tr>
                      <th scope="row"></th>
                          <td>{{$emailModel->subscribeEmail}}</td>                 
                          <td>
                              <div class="row">
                                    <div class="col-sm">
                                        <a href="{{route('sendEmail',$emailModel->id)}}" class="btn btn-primary">Send-Email</a>
                                    </div>
                                  <div class="col-sm-9">
                                  <form action="{{route('SubscribeEmailDelete',$emailModel->id)}}" method="POST">
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