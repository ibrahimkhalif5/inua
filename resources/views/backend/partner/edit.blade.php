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
                            <h4>Update Partner </h4>
                        </div>
                        <div class="card-body">

                            <form class="" method="POST" action="/admin/partner/update/{{$Partner->id}}">
                                @csrf
                                {{method_field('PUT')}}

                                <div class="form-group">
                                    <input id="partner" name="partner" value="{{$Partner->partner}}"
                                        placeholder="Enter  partner name" class="form-control" type="text"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image" id="image"
                                        accept=".png, .jpeg, .jpg, image/*">
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>

                                </div>


                            </form>

                        </div>

                    </div>

                </div>



                @endsection