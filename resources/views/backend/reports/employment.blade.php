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
                            <h4>Registered Youths</h4>
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
                                            <th>Passport</th>
                                            <th>subcounty</th>
                                            <th>Pwd</th>
                                            <th>Education Level</th>
                                            <th>Area of study</th>
                                            <th>Age</th>
                                            <th>Phone</th>
                                            <th>action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($reg as $row)
                                        <tr>


                                            <th> {{$loop->index+1}}</th>
                                            <td>{{strtoupper($row->User->name)}}</td>
                                            <td>{{strtoupper($row->idno)}}</td>
                                            <td>{{strtoupper($row->passport)}}</td>
                                            <td>{{strtoupper($row->subcounty)}}</td>
                                            <td>{{strtoupper($row->pwd)}}</td>
                                            <td>{{strtoupper($row->education)}}</td>
                                            <td>{{strtoupper($row->qualification)}}</td>
                                            <td><?php
// Given birth date from the HTML code
$htmlBirthDate = "<td>{{strtoupper($row->birth_date)}}</td>";

// Step 1: Extract the birth date from the HTML code
preg_match('/<td>{{strtoupper\((.*?)\)}}<\/td>/', $htmlBirthDate, $matches);
$birthDateStr = $matches[1];

// Step 2: Parse the birth date from the extracted string (assuming the format is 'YYYY-MM-DD')
$birthDateObj = DateTime::createFromFormat('Y-m-d', $birthDateStr);

// Step 3: Get the current date
$currentDateObj = new DateTime();

// Step 4: Calculate the difference between the current date and the birth date to determine the age
$age = $currentDateObj->diff($birthDateObj)->y;

echo  $age . " years";
?>
                                            </td>
                                            <td>{{strtoupper($row->mobile)}}</td>
                                            <td><a href="/admin/applicant/CV/{{$row->id}}"
                                                    class="btn btn-success">View</a>
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