@extends('web.layouts.default')
@section('content')



<!-- Breadcrumb Start -->
<section class="section_breadcrumb sectors_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">sectors</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">sectors</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Industry Sectors Start -->
<section class="section_block sectors">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section_title">industry sectors</h2>
            </div>
        </div>
        <div class="row gy-5 mt-0 mt-lg-50">
            <div class="col-md-6 col-lg-4">
                <a href="construction.html" class="sector_link">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="assets/web/images/sector_construction.png" alt="construction" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">construction</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="agriculture.html" class="sector_link">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="assets/web/images/sector_agriculture.png" alt="agriculture" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">agriculture</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="supply_chain.html" class="sector_link">
                    <div class="card" data-aos="zoom-in-left" data-aos-duration="1000">
                        <img src="assets/web/images/sector_supplychain.png" alt="supply chain" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">supply chain</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="technology.html" class="sector_link">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="assets/web/images/sector_technology.png" alt="technology" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">technology</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="natural_resources.html" class="sector_link">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="assets/web/images/sector_naturalresources.png" alt="natural resources" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">natural resources</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="energy.html" class="sector_link">
                    <div class="card" data-aos="zoom-in-left" data-aos-duration="1000">
                        <img src="assets/web/images/sector_energy.png" alt="energy" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">energy</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="textiles.html" class="sector_link">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="assets/web/images/sector_textiles.png" alt="textiles" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">textiles</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Industry Sectors End -->


@stop