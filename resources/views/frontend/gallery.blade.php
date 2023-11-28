@extends('frontend.layouts.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('front/images/gov.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Our Gallery</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>gallery <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<hr>
<hr>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            @foreach($gal as $row )
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