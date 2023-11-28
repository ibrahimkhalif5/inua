@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update opportunity Info </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="/admin/opportunities/update/{{$Career->id}}"
                                enctype="multipart/form-data">
                                @csrf

                                {{method_field('PUT')}}

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Opportunity type</label>
                                            <select class="form-control" id="role" name="type">
                                                <option selected="select">Select....</option>
                                                <option value="training">Training & Capacity Building</option>
                                                <option value="intern">Internship</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Delivery Mode</label>
                                            <select class="form-control" id="tmode" name="tmode">
                                                <option selected="select">Select....</option>
                                                <option value="online">Online</option>
                                                <option value="inperson">In Person</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <input type="text" class="form-control" value="{{$Career->title}}"
                                                name="title" id="title" placeholder="Enter title ....">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <textarea class="form-control" name="description"
                                                value="{{$Career->description}}" id="description"
                                                placeholder="Enter  Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label>Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="open">Open</option>
                                                <option value="close">Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" id="image"
                                                accept=".png, .jpeg, .jpg, image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-success btn-block" type="submit">Submit</button>

                                </div>
                            </form>







                        </div>

                    </div>

                </div>



                @endsection