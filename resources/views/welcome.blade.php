<div class="invoice-print">
    <div class="row">
        <div class="col-lg-12">


            <div class="row">
                <div class="col-md-6">
                    <address>
                        <label for=""><strong><b><u>APPLICANT DETAILS:</u></b></strong></label><br>

                        <label for="" style=" width: 100px;font-size: 10px;">PHONE
                            NUMBER</label><b>{{ strtoupper($Job->mobile) }}</b>
                        <br>
                        <label for="" style=" width: 100px;font-size: 10px;">EMAIL ADDRESS:</label>
                        <b>{{ strtoupper($Job->email) }}</b><br>

                        <label for="" style=" width: 100px;font-size: 10px;">SUBCOUNTY:</label>
                        <b>{{ strtoupper($Job->subcounty) }}</b><br>

                        <label for="" style="width: 100px;font-size: 10px;">WARD:</label>
                        <b>{{ strtoupper($Job->ward) }}</b><br>
                        <label for="" style=" width: 100px;font-size: 10px;">DATE OF BIRTH:</label>
                        <b>{{ strtoupper($Job->birth_date) }}</b><br>
                        <label for="" style=" width: 100px;font-size: 10px;">ID NUMBER:</label>
                        <b>{{ strtoupper($Job->idno) }}<br>


                            @if ($Job->passport === 'yes')
                            <label for="" style=" width: 100px;font-size: 10px;">PASSPORT
                                NO:</label>
                            <b><i>{{ strtoupper($Job->passport_no) }}</b>
                            <br>

                            <label for="" style=" width: 100px;font-size: 10px;">EXPIRY
                                DATE:</label>
                            <b><i>{{ strtoupper($Job->passport_date) }}</b><br>
                            @else
                            <!-- Display something else, like 'N/A' if the passport is not 'yes' -->

                            @endif

                    </address>
                </div>
                <div class="col-md-6 text-md-right">
                    <address>
                        <label for=""><strong><b><u>NEXT OF KING:</u></b></strong></label><br>

                        <label for="" style="font-size: 10px;">NAME</label><b>{{ strtoupper($Job->parent_name) }}</b>
                        <br>
                        <label for="" style=" font-size: 10px;">NUMBER:</label>
                        <b>{{ strtoupper($Job->parent_no) }}</b>
                    </address>
                </div>

            </div>

        </div>
    </div>
    <hr class="custom-hr">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="section-title">EDUCATION SUMMARY</div>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-md">
                    <tr>
                        <th data-width="40">#</th>
                        <th class="text-center">EDUCATION LEVEL</th>
                        <th class="text-center">COURSE</th>
                        <th class="text-center">GRADE</th>
                        <th class="text-right">PASSPORT</th>
                    </tr>

                    <tr>
                        <td class="text-center"> {{$Job->index+1}}</td>
                        <td class="text-center">{{strtoupper($Job->education)}}</td>
                        <td class="text-center">{{strtoupper($Job->qualification)}}</td>
                        <td class="text-center">{{strtoupper($Job->grade)}}</td>
                        <td class="text-center">{{strtoupper($Job->passport)}}</td>

                    </tr>


                </table>
            </div>
            <hr class="custom-hr">
            <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="section-title"><u>WORK EXPERIENCE</u></div>



                    <label for="">EMPLOYER NAME:</label> <b><i><input type="text"
                                value="{{ strtoupper($Job->employer) }}" disabled
                                style=" width: 200px; font-size: 10px;"></i></b><br>


                    <label for="">YEARS OF EXPERIENCE:</label> <b><i><input type="text"
                                value="{{ strtoupper($Job->exp_year) }}" disabled
                                style="width: 200px;font-size: 10px;"></i></b><br>


                    <label for="">POSITION HELD:</label> <b><i><input type="text"
                                value="{{ strtoupper($Job->position) }}" disabled
                                style=" width: 200px;font-size: 12px;"></i></b><br>


                    <div class="section-title"><U>DUTIES & RESPONSIBILIES</U></div>
                    <ul>

                        @php
                        $workExperiences = explode("\n", $Job->work);
                        @endphp

                        @foreach ($workExperiences as $experience)
                        <li>

                            <p>{{strtoupper( $experience) }}</p>
                        </li>
                        @endforeach
                    </ul>



                </div>

            </div>
        </div>
    </div>
</div>