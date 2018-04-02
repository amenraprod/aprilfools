@extends('layouts.app')

@section('content')



      <div class="panel panel-default">
            <div class="panel-heading">
                  Edit profile
            </div>

            <div class="panel-body">
                  <form action="{{ route('user.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">User</label>
                              <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="name">New Password</label>
                              <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                              <label for="name">Upload a new avatar</label>
                              <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="name">Gender</label>
                              <input type="text" name="gender" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="name">DOB</label>
                              <input type="text" name="dob" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="name">Phone Number</label>
                              <input type="text" name="phonenumber" class="form-control">
                        </div>

                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Add user
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      </div>
@stop
