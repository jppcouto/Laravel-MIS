@extends('layouts.master')


@section('title')
- User List
@endsection


@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> User List</h4>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Usertype</th>
                <th class="text-right">Edit</th>
                <th class="text-right">Delete</th>
              </thead>
              <tbody>
                @foreach ($users as $u)
                    

                <tr>
                  <td>{{$u->name}}</td>
                  <td>{{$u->phone}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->usertype}}</td>
                  <td class="text-right">
                  <a href="/role-edit/{{ $u->id }}" class="btn btn-success">EDIT</a>
                  </td>
                  <td class="text-right">
                    <a href="" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>   


@endsection


@section('scripts')
    
@endsection