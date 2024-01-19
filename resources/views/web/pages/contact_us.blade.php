@extends('web.layouts.default')
@section('content')

<!-- Breadcrumb Start -->
<section class="section_breadcrumb contact_bg" style="
background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">contact us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item"><a href="about_us.html">about us</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Contact Info Start -->
<section class="section_contact_info">
    <div class="container">
        <div class="row gy-5 gy-md-0">
            <div class="col-md-4 col-lg4 d-flex">
                <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="assets/web/images//contact_phone.png" alt="phone" class="img-icon">
                        <h3 class="card-title">give us a call</h3>
                        <p class="card-text"><a href="tel:+1400630123">(+1) 400-630 123</a></p>
                        <p class="card-text"><a href="tel:+1560630123">(+1) 560-630 123</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg4 d-flex">
                <div class="card flex-grow-1" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="assets/web/images//contact_email.png" alt="phone" class="img-icon">
                        <h3 class="card-title text-uppercase">drop us a line</h3>
                        <p class="card-text"><a href="mailto:info@castnet.com">info@castnet.com</a></p>
                        <p class="card-text"><a href="mailto:info@castnet11chamber.com">info@castnet11chamber.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg4 d-flex">
                <div class="card flex-grow-1" data-aos="zoom-in-left" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="assets/web/images//contact_map.png" alt="phone" class="img-icon">
                        <h3 class="card-title">visit our office</h3>
                        <p class="card-text">New York, 112 W 34th St<br>Caroline, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Info End -->

<!-- Request Quote Start -->
<section class="section_req_quote">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 mx-auto">
                <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                    <span class="sub_title">request a quote</span>
                    <h2 class="title">How May We Help You!</h2>
                    <form action="#">
                        <div class="row gy-4">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-12 col-md-12">
                                <textarea class="form-control" placeholder="Write a message" cols="30" rows="5"></textarea>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-primary">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Request Quote End -->

<!-- Map Start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d25741.69044554004!2d-74.3085925148786!3d40.77942931948609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89c3a95afe5fcbb9%3A0x9644f0d90d4a58e5!2s483%20S%20Livingston%20Ave%2C%20Livingston%2C%20NJ%2007039%2C%20United%20States!3m2!1d40.7749163!2d-74.3216291!5e0!3m2!1sen!2s!4v1702547984314!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Map End -->

@stop