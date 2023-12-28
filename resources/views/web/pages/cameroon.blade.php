@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb outreach_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Cameroon</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="outreach.html">outreach</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cameroon</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Map Start -->
    <section class="section_map" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/web/images/map_cameroon.png" alt="map" class="img-map">
                </div>
            </div>
        </div>
    </section>
    <!-- Map End -->

    <!-- Outreach Inner CTA Start -->
    <section class="section_block outreach_inner_cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title">Country Introduction</h2>
                    <p class="text col-md-10 mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Outreach Inner CTA End -->

    <!-- Section Alt Start -->
    <section class="section_block section_block_alt">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="assets/web/images/culture_cameroon.png" alt="culture_cameroon">
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">Cultural Relevance</h2>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    @stop