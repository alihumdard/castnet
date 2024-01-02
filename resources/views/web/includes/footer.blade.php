<!-- Footer Start -->
@php
$setting = appSetting();
$footerLogoPath = isset($setting['footer_logo']) ? asset('storage/' . $setting['footer_logo']) : asset('assets/web/images/logo.png');
@endphp
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('web.index') }}">
                    <img src="{{$footerLogoPath}}" alt="logo" class="footer_logo">
                </a>
                <p class="footer_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="social_link">
                        <img src="assets/web/images/icon_fb.png" alt="social icons" class="img-icon">
                    </a>
                    <a href="#" class="social_link">
                        <img src="assets/web/images/icon_tw.png" alt="social icons" class="img-icon">
                    </a>
                    <a href="#" class="social_link">
                        <img src="assets/web/images/icon_li.png" alt="social icons" class="img-icon">
                    </a>
                    <a href="#" class="social_link">
                        <img src="assets/web/images/icon_ig.png" alt="social icons" class="img-icon">
                    </a>
                    {{--  @foreach ($socialmedia ?? [] as $link)
                    <a href="{{ $link['link'] }}">
                        <img class="img-circle" src="{{ Storage::url($link['img_url']) }}" alt="{{ $link['type'] }}" height="32" width="32" style="border-radius: 50%" alt="Your Image Alt Text">
                    </a>
                @endforeach   --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-lg-5">
                <div class="ms-lg-5">
                    <div class="footer_heading">main links</div>
                    <div class="footer_links">
                        <a href="index.html" class="footer_link">home</a>
                        <a href="#" class="footer_link">membership</a>
                        <a href="#" class="footer_link">volunteers</a>
                        <a href="#" class="footer_link">sectors</a>
                        <a href="#" class="footer_link">impact page</a>
                        <a href="#" class="footer_link">financial support</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-lg-5">
                <div class="footer_heading">contact</div>
                <div class="footer_links">
                    <div class="contact_media">
                        <div class="icon">
                            <img src="assets/web/images/icon_phone.png" alt="phone" class="img-fluid">
                        </div>
                        <div class="text">
                            <a href="tel:{{ appSetting()['phone'] ?? '(406) 555-0120' }}">{{ appSetting()['phone'] ?? '(406) 555-0120' }}</a>
                        </div>
                    </div>
                    <div class="contact_media">
                        <div class="icon">
                            <img src="assets/web/images/icon_email.png" alt="phone" class="img-fluid">
                        </div>
                        <div class="text">
                            <a href="mailto:{{ appSetting()['email'] ?? 'castnetdummy@gmail.com' }}">{{ appSetting()['email'] ?? 'castnetdummy@gmail.com' }}</a>
                        </div>
                    </div>
                    <div class="contact_media">
                        <div class="icon">
                            <img src="assets/web/images/icon_map.png" alt="phone" class="img-fluid">
                        </div>
                        <div class="text">{{ appSetting()['address'] ?? '11580 State Route 44 #1016 Mantua, OH 44255 United States' }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-lg-5">
                <div class="footer_heading text-uppercase">our newsletter</div>
                <form action="#">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <button type="submit" class="btn btn-submit">subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-center text-lg-start fw-light fs-5">&copy; Copyright 2023 international chamber of Commerce. All rights reserved</p>
                </div>
                <div class="col-lg-6">
                    <p class="text-center text-lg-end fw-light fs-5">Designed &amp; Developed by <a href="https://leadconcept.com/" target="_blank">LEADconcept</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- REQUIRED SCRIPTS -->

@include('web.includes.script')
