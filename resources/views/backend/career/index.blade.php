@extends('backend.layouts.backend')
@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Available Opportunities</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>delivery mode</th>
                                            <th>start date</th>
                                            <th>end date</th>
                                            <th>status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($jobs as $row)
                                        <tr>
                                            <th> {{$loop->index+1}}</th>
                                            <td>{{$row->title}}</td>

                                            <td>{{$row->description}}</td>
                                            <td>{{$row->tmode}}</td>
                                            <td>{{$row->start_date}}</td>
                                            <td>{{$row->end_date}}</td>
                                            <td>{{$row->status}}</td>
                                            <td>

                                                <a href="/admin/opportunities/edit/{{$row->id}}"
                                                    class="btn btn-success">Edit</a>

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
        </div>
    </section>

</div>





@endsection