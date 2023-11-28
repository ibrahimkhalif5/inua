@extends('frontend.layouts.main')
@section('content')

<section class="home-slider owl-carousel">
    @foreach($gal as $row)
    <div class="slider-item" style="background-image:url({{asset('uploads/image_files/'.$row->image)}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">{{$row->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    @endforeach


</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                <div class="text px-4 ftco-animate">
                    <p>Welcome to the Mandera Youth Support Program, a transformative initiative led by the Department
                        of Delivery Units under the visionary leadership of HE Mohamed Adan Khalif, Governor of Mandera
                        County. Our mission is crystal clear: to empower and uplift the youth in our community by
                        providing them with opportunities for growth and development.

                        Dedicated to Empowering Youth, Fostering Internships, and Guiding Careers
                        At the heart of our program is an unwavering commitment to the youth of Mandera County. We
                        believe that the key to a brighter future lies in equipping our young residents with the skills,
                        knowledge, and resources they need to thrive. Our program extends its support through various
                        avenues, including internships and career guidance through skill training.
                    </p>


                    <p><a href="/about-us" class="btn btn-secondary px-4 py-3">Read More</a></p>
                </div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4">Mandera Youth Support Program</h2>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-security"></span></div>
                            <div class="text">
                                <h3>Our Mission</h3>
                                <p>The Mandera Youth Support program initiative's aim is to empower the youth by
                                    establishing long-term job and economic opportunities through a joint effort
                                    including the public and private sectors. Our objective is to solve the county's
                                    current socioeconomic difficulties, eliminate poverty, and increase general
                                    well-being</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-reading"></span></div>
                            <div class="text">
                                <h3>Our Vission</h3>
                                <p>To make Mandera County a dynamic and economically active region where young people
                                    have access to quality skills, entrepreneurship possibilities and jobs they need to
                                    ensure their financial future. </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary hidden-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    modal
</button>


<!-- Modal -->
<div class="modal fade" id="youth" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Use 'modal-lg' for a larger modal -->
        <div class="modal-content">

            <!-- Second Section -->
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Disclaimer</h1>
            </div>
            <div class="modal-body">
                <h4>Important Notice</h4>
                <p>This website is not a job placement platform. Our primary mission is to collect valuable data that
                    aids in informed decision-making for the benefit of our community. Your decision to register your
                    data here is entirely voluntary and contributes to our efforts to understand the needs and
                    aspirations of our youth.
                </p>
                <input type="checkbox" id="acceptCheckbox"> I agree to the terms and conditions

            </div>

            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <a href="/login"><button type="button" class="btn btn-primary" id="proceedButton">Understood</button></a> 
        <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">View Terms and Conditions</a>
    </div>
        </div>
    </div>
</div>

<!-- Terms and Conditions Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <!-- Use 'modal-dialog-scrollable' for a scrollable modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel"><strong>Mandera Youth Support Program Terms and Conditions</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Introduction -->
                <p> We are committed to protecting the privacy and data security of all individuals participating in this program. The privacy notice outlines how we collect, use, and protect your personal information in accordance with the Kenya Data Protection Act 2019 and its subsequent regulations.</p>
                
                <!-- Collection of Personal Data -->
                <p><strong>2. Collection of Personal Data</strong></p>
                <p>We collect the following categories of data:</p>
                <ul>
                        <li>Contact Information:</li>
                        <ul>
                            <li>Name</li>
                            <li>Legal Identification</li>
                            <li>Email Address</li>
                            <li>Phone Number</li>
                            <li>Parent Details</li>
                        </ul>
                        <li>Profession Information:</li>
                        <ul>
                            <li>Education History</li>
                            <li>Employment History</li>
                        </ul>
                    </ul>
                
                <!-- Purpose of Data Collection -->
                <p><strong>3. Purpose of Data Collection</strong></p>
                <p>Our primary mission is to collect valuable data that aids in informed decision-making for the benefit of our community. Your decision to register your data here is entirely voluntary and contributes to our efforts to understand the needs and aspirations of our youth.</p>

                <!-- Data Sharing -->
                <p><strong>4. Data Sharing</strong></p>
                <p>We may share your data with third parties to look for opportunities for you.</p>

                <!-- Your Rights -->
                <p><strong>5. Your Rights</strong></p>
                <p>Under the Kenya Data Protection Act 2019, you have the following rights:</p>
                <ul>
                    <li>The right to access to your personal data</li>
                    <li>The right to rectify inaccurate or incomplete data</li>
                    <li>The right to request the erasure of your data</li>
                    <li>The right to object to processing of your data</li>
                    <li>The right to restrict processing of your data</li>
                    <li>The right to data portability</li>
                    <!-- Add more rights as needed -->
                </ul>

                <!-- Changes to Privacy Notice -->
                <p><strong>6. Changes to Privacy Notice</strong></p>
                <p>This privacy notice may be updated from time to time to reflect changes in our practices or legal requirements. By registering on this website, you acknowledge and consent to the processing of your personal data as described in this privacy notice.</p>

                <!-- Acceptance Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="acceptterm">
                    <label class="form-check-label" for="acceptCheckbox">I confirm the above information is true and correct to the best of my understanding.</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="/login"><button type="button" class="btn btn-primary" id="proceedB">Understood</button></a>
                 </div>
        </div>
    </div>
</div>











<style>
.hidden-button {
    display: none;
}
#youth .modal-dialog {
    margin-top: 10%;
    }
</style>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Available</span> Career opportunities</h2>

            </div>
        </div>
        <div class="row">
            @foreach($car as $row)
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url({{asset('uploads/image_files/'.$row->image)}});"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">{{$row->title}}</a></h3>
                    <p class="subheading"><span>Start Date:</span> {{$row->start_date}}</p>
                    <p class="subheading"><span>Status:</span> {{$row->status}}</p>
                    {{$row->description}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter"
    style="background-image: url({{asset('front/images/bg_4.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                <h2 class="mb-4"><span>Our</span> Achievment</h2>

            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="18">0</strong>
                                <span>Trainings</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="351">0</strong>
                                <span>Internships</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="564">0</strong>
                                <span>Certificates</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="300">0</strong>
                                <span>Awards Won</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Our</span> Partners</h2>

            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    @foreach($par as $row)
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4"
                                style="background-image: url({{asset('uploads/image_files/'.$row->image)}})">
                            </div>
                            <div class="text ml-2 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>

                                <p class="name">{{$row->partner}}</p>
                                <!-- <span class="position">{{$row->partner}}</span> -->
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            @foreach($gal as $row)
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('uploads/image_files/'.$row->image)}}"
                    class="gallery image-popup1 img d-flex align-items-center"
                    style="background-image: url({{asset('uploads/image_files/'.$row->image)}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>






@endsection