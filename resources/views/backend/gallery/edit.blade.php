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
                            <h4>Update Gallery </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="/admin/gallery/update/{{$Gallery->id}}">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group">
                                    <label>Image Title</label>
                                    <input id="title" name="title" value="{{$Gallery->title}}"
                                        placeholder="Enter title....." class="form-control" type="text"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <label>Image Description</label>
                                    <input id="description" name="description" placeholder="image description"
                                        value="{{$Gallery->description}}" class="form-control" type="textarea"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="user">show image</option>
                                        <option value="admin">Hide image</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="image" name="image" class="form-control" type="file">

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Update</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>



                @endsection