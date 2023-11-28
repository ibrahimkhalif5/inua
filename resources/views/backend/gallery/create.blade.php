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
                            <h4>Add Images</h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="{{url('/admin/gallery')}}" id="postComment"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <input id="title" name="title" placeholder="enter image title" class="form-control"
                                        type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input id="description" name="description" placeholder="image description"
                                        class="form-control" type="textarea" required="required">
                                </div>
                                <div class="form-group">
                                    <input id="image" name="image" class="form-control" type="file" required="required">

                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>

                                </div>
                            </form>

                        </div>

                    </div>

                </div>



                @endsection