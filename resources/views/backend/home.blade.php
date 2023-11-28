@extends('backend.layouts.user')
@section('content')


<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>My Application</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport1" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>photo</th>
                                            <th>Full Name</th>
                                            <th>Idno</th>
                                            <th>Email</th>
                                            <th>ward</th>
                                            <th>passport</th>
                                            <th>Education level</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($reg as $row)
                                        <tr>
                                            <th> {{$loop->index+1}}</th>
                                            <td><img src="{{asset('uploads/image_files/'.$row->image)}}" width="100px"
                                                    height="100px" alt="image"></td>
                                            <td>{{$row->User->name}}</td>
                                            <td>{{$row->idno}}</td>
                                            <td>{{$row->User->email}}</td>
                                            <td>{{$row->ward}}</td>
                                            <td>{{$row->passport}}</td>
                                            <td>{{$row->education}}</td>
                                            <td>
                                                <a href="/user/application/edit/{{$row->id}}"
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