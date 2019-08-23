@extends('front.layouts.main')

@section('content')

<div class="containter">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-lg-8 ">
            <div class="row bg-white mt-0">
                <div class="col-12 p-0">
                    <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" style="width: 100%"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                                alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                                alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="containter">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-lg-8 ">
            <div class="row bg-white mt-4">
                <div class="col-12 py-3 d-flex justify-content-between">
                    <h5 class="font-weight-bold">Fashion</h5>
                    <a href="#">
                        <h5 class="font-weight-bold">See More..</h5>
                    </a>

                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                        <img onclick="openModal(this)" class="text-center img-fluid""
                        src=" ./img/products/dumur.jpg" alt="">
                        <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice product
                        name that can be two lines in length</p>
                        <h5 class="product-price">105 Taka</h5>
                        <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
