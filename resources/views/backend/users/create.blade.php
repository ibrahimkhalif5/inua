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
                            <i class="fas fa-user-plus">

                            </i> |
                            <h4> User</h4>

                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="{{url('/admin/users')}}">
                                @csrf

                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Fullname.." name="fullname">
                                </div>
                                <div class="form-group">

                                    <input type="email" class="form-control" placeholder="Email.." name="email"></input>
                                </div>
                                <div class="form-group">

                                    <input type="password" class="form-control" placeholder="password.."
                                        name="password">
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection