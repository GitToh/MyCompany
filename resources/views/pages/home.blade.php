<!-- เรียกใช้ Template -->
@extends('layouts.master_template')
<!-- เรียกใช้ Title -->
@section('title')Home @endsection
<!-- เรียกใช้ Content -->
@section('content')

<div id="carouselId" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/slide1.jpg')}}" class="img-fluid" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide2.jpg')}}" class="img-fluid" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide3.jpg')}}" class="img-fluid" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Contentner -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>Home</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus aspernatur dignissimos at. Impedit qui sit perferendis? Inventore, est fugiat, voluptatem sapiente ad accusantium recusandae at saepe sit officia, dolores labore!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-concierge-bell fa-3x text-warning"></i>
            <h1>About us</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel provident iusto culpa hic dolor voluptate sapiente earum at, error minus rem eum alias, et, quia optio quam consequuntur nisi itaque!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-cloud-showers-heavy fa-3x text-danger"></i>
            <h1>Service</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quo optio ea fugit, nostrum ex, quisquam voluptate expedita architecto dicta eaque recusandae amet consequuntur error a ad voluptatem et deleniti.</p>
        </div>
    </div>
</div>
@endsection