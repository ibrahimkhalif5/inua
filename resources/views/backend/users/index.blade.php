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
                            <h4>Registered Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>

                                            <th>role</th>
                                            <th>created at</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $row)
                                        <tr>
                                            <th> {{$loop->index+1}}</th>
                                            <td>{{$row->name}}</td>

                                            <td>{{$row->email}}</td>
                                            <td>{{$row->role}}</td>

                                            <td>{{$row->created_at}}</td>
                                            <td>

                                                <a href="/admin/user/role/{{$row->id}}" class="btn btn-success">Edit</a>

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