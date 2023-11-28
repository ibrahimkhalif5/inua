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
                            <h4>Postgraduate Holders </h4>
                        </div>
                        <div class="card-body">
                            <!-- <div class="text-center mb-4">
                                <img src="{{ asset('back/assets/img/mdr1.png') }}" alt="Logo" width="200" class="logo">
                            </div> -->

                            <div class="table-responsive">

                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                    <thead>
                                        <tr>

                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>ID-No</th>
                                            <th>ward</th>
                                            <th>passport</th>

                                            <th>Phone</th>
                                            <th>Education Level</th>
                                            <th>Area of Study</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($reg as $row)
                                        <tr>


                                            <th> {{$loop->index+1}}</th>
                                            <td>{{strtoupper($row->User->name)}}</td>
                                            <td>{{strtoupper($row->idno)}}</td>
                                            <td>{{strtoupper($row->ward)}}</td>
                                            <td>{{strtoupper($row->passport)}}</td>
                                            <td>{{strtoupper($row->mobile)}}</td>
                                            <td>{{strtoupper($row->education)}}</td>
                                            <td>{{strtoupper($row->qualification)}}</td>


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