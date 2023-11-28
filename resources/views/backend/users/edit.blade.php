@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update user Info </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="/admin/user/update/{{$User->id}}">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" value="{{$User->name}}" class="form-control" name="fullname"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" value="{{$User->email}}" class="form-control" name="email"
                                        readonly></input>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="user">User</option>
                                        <option value="super_admin">super_admin</option>

                                    </select>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Update</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection