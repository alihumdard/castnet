@extends('web.layouts.default')
@section('content')


<!-- Breadcrumb Start -->
    <section class="section_breadcrumb who_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">who we are</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="about_us.html">about us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">who we are</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Welcome Start -->
    <section class="section_block ten_things">
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-md-5">
                <div class="col-md-12 col-lg-12" data-aos="zoom-in" data-aos-duration="1000">
                    <h2 class="ten_things_title">10 things you might not know about the Chamber:</h2>
                    <ol class="mb-0">
                        <li class="order-item">Nearly 80 percent of Chamber members are small businesses with less than 100 employees.</li>
                        <li class="order-item">One-third of Chamber members are micro-enterprises with less than 10 employees.</li>
                        <li class="order-item">One-third of Chamber members are located outside of Seattle city limits.</li>
                        <li class="order-item">Twenty-six businessmen established the Chamber in 1882 to provide support for John Leary’s bid for a mail contract to Alaska. He won the bid but wasn’t so successful with the mail. The boiler blew in his first ship and the second caught on fire.</li>
                        <li class="order-item">The Chamber has a long history of incubation and operational partnership with organizations that engage employers on important issues at the local, state, federal, and international levels. We currently have eight affiliate organizations that have developed out of this work; learn more about them here.</li>
                        <li class="order-item">Members can access resources like our standout Business Health Trust, which offers affordable employee health benefits for businesses from 2-200 employees, as well as an exclusive IT benefit program through our trusted partner, Latitudes.</li>
                        <li class="order-item">More than 1,000 young professionals are part of the Chamber’s Young Professionals Network.</li>
                        <li class="order-item">Speakers at Chamber events have ranged from Sir Mix-A-Lot to Ralph Nader to Malcolm Gladwell to Dave Barry to Tom Brokaw to Madeleine Albright.</li>
                        <li class="order-item">The Chamber was the first business association in the state to seriously address climate change.</li>
                        <li class="order-item">Chamber members raised the money to purchase the land for Fort Lawton, now Discovery Park, and in 1898, turned the title over to the U.S. Army for 703 acres.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome End -->

    <!-- What We Do Start -->
    <section class="section_block our_value">
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-md-5">
                <div class="col-md-6 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="assets/web/images//jigsaw.png" alt="value">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="section_title">what we do</h2>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do End -->

    <!-- Principles Start -->
    <section class="section_block principles">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section_title">Lorem Ipsum inquiriestment</h2>
                </div>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission" aria-selected="true">mission</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-vision-tab" data-bs-toggle="pill" data-bs-target="#pills-vision" type="button" role="tab" aria-controls="pills-vision" aria-selected="false">vision</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-purpose-tab" data-bs-toggle="pill" data-bs-target="#pills-purpose" type="button" role="tab" aria-controls="pills-purpose" aria-selected="false">purpose</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab" tabindex="0">mission</div>
                <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab" tabindex="0">Our vision at C.A.S.T.N.E.T. is to be the leading international platform that seamlessly integrates small businesses from diverse regions, especially those in the United States and Africa. We aim to create a thriving global ecosystem where these businesses can leverage digital solutions to foster sustainable growth, innovation, and economic development, free from any political or partisan influences</div>
                <div class="tab-pane fade" id="pills-purpose" role="tabpanel" aria-labelledby="pills-purpose-tab" tabindex="0">purpose</div>
            </div>
        </div>
    </section>
    <!-- Principles End -->

@stop