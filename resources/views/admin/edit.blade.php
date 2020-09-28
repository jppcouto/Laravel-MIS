@extends('layouts.master')


@section('title')
- User Edit
@endsection


@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> User Edit</h4>
        </div>
        <div class="card-body">
        <form action="/role-update/{{$users->id}}" method="post">
            <div class="form-group">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <label>Name</label>
              <input type="text" class="form-control" name="username" value="{{$users->name}}">
            </div>
            <div class="form-group">
              <label>Role</label>
              <select class="form-control" name="usertype">
                <option value="admin">Admin</option>
                <option value="vendor">Vendor</option>
                <option value="">None</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/role-register" class="btn btn-danger">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>   


@endsection


@section('scripts')
    
@endsection