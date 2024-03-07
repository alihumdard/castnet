@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb forms_bg-1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Forms</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="about_us.html">FINANCIAL</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Forms</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Event Request Form Start -->
    <section class="section_block request_form">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">Financial Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="" method="POST" id="financial_form" data-aos="zoom-in" data-aos-duration="1000">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" placeholder="Last Name" name="LName">
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="number" class="form-control" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-md-12 errorshow">
                                <input type="text" class="form-control" placeholder="Business Name" name="businessName">
                            </div>
                            <div class="col-md-12 errorshow">
                                <input type="text" class="form-control" placeholder="Business Address" name="businessAddress">
                            </div>
                            <div class="col-md-6 errorshow">
                                <select class="form-select" name="fundingPurpose">
                                    <option selected disabled>Purpose of Funding</option>
                                    <option value="1">Investments</option>
                                    <option value="2">Loans</option>
                                    <option value="3">Grants</option>
                                </select>
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" placeholder="Country" name="country">
                            </div>
                            <div class="col-md-12">
                                <div class="errorshow">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Business Type</h3>

                                    <div class="form-check py-5">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="option1" name="options"
                                                    value="option1">
                                                <label class="form-check-label" for="option1">Private Limited
                                                    Company</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="option1" name="options"
                                                    value="option1">
                                                <label class="form-check-label" for="option1">Public Listed
                                                    Company</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="option1" name="options"
                                                    value="option1">
                                                <label class="form-check-label" for="option1">Cooperative</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="option1" name="options"
                                                    value="option1">
                                                <label class="form-check-label" for="option1">Sole
                                                    Proprietorship</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="option1" name="options"
                                                    value="option1">
                                                <label class="form-check-label" for="option1">Partnership</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="option1" name="options"
                                                    value="option1">
                                                <label class="form-check-label" for="option1">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-12 errorshow">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Your Net Worth</h3>
                                        <div class="form-check py-5">
                                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                                <div class="col">
                                                    <input type="radio" class="form-check-input" id="option1"
                                                        name="option" value="option1">
                                                    <label class="form-check-label" for="option1">More than
                                                        $320k</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" class="form-check-input" id="option1"
                                                        name="option" value="option1">
                                                    <label class="form-check-label" for="option1">Less than
                                                        $320k</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" class="form-check-input" id="option1"
                                                        name="option" value="option1">
                                                    <label class="form-check-label" for="option1">I am not sure</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" class="form-check-input" id="option1"
                                                        name="option" value="option1">
                                                    <label class="form-check-label" for="option1">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <select class="form-select" name="selecProgram">
                                    <option selected disabled>Select Program</option>
                                    <option value="1">Advocacy Program</option>
                                    <option value="2">Active Project</option>
                                    <option value="3">Planned Project</option>
                                    <option value="4">Development / Prototype</option>
                                    <option value="5">Research / Feacibility Reports</option>
                                    <option value="6">Event / Workshop</option>
                                    <option value="7">Education / Training</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" name="recent_income"
                                    placeholder="Declared Personal Income for Recent Year">
                            </div>

                            <div class="upl-head">
                                <h2 class="form-heading-upl">Please upload related documents about partnerships, shareholder's fund, key management.</h2>
                            </div>

                            <div class="col-md-12">
                             
                                    <div class="upload-files-container">
                                        <div class="drag-file-area">
                                            <span class="material-icons-outlined upload-icon"><img
                                                    src="./assets/web/images/upload-icon.png"> </span><br>
                                        
                                                      <a href="" id="uploadLink" class="input-button">browse file</a>
                                                      <input type="file" id="fileInput" style="display: none;" onchange="handleFileUpload(event)">
                                                      
                                                      <script>
                                                        function handleFileUpload(event) {
                                                          const file = event.target.files[0];
                                                          if (file) {
                                                            // You can perform further actions with the selected file here
                                                            console.log("File selected:", file.name);
                                                          }
                                                        }
                                                    
                                                        document.getElementById("uploadLink").addEventListener("click", function() {
                                                          document.getElementById("fileInput").click();
                                                        });
                                                      </script>

                                            <h3 class="dynamic-message"> Drag & drop any file here </h3>
                                        </div>
                                     
                                        <!-- <button type="button" class="upload-button"> Upload </button> -->
                                    </div>
                           
                            </div>

                            <!-- <span class="browse-files-text"
                            style="align-items: center;">browse file</span> </span> </label> -->

                            <!-- Form Button -->
                            {{-- <div class="col-12 text-center">
                                <a href="#" class="btn btn-primary">submit</a>
                            </div> --}}
                            <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                                <h2 class="section_title" style="
                                margin-bottom: 25px;
                            ">Payment Details</h2>
                                <div class="row gy-4" style="margin-bottom: 15px">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group errorshow">
                                        <input type="text" class="form-control" placeholder="Name on Card" name="full_name" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group errorshow">
                                        <input type="number" class="form-control" min="1" placeholder="Card Number" name="card_number" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                        <input type="number" class="form-control" placeholder="CVC" name="cvv" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                            <select class="form-control" name="expiry_month">
                                                <option disabled selected>MM</option>
                                                                                            <option value="1" >1</option>
                                                                                            <option value="2" >2</option>
                                                                                            <option value="3" >3</option>
                                                                                            <option value="4" >4</option>
                                                                                            <option value="5" >5</option>
                                                                                            <option value="6" >6</option>
                                                                                            <option value="7" >7</option>
                                                                                            <option value="8" >8</option>
                                                                                            <option value="9" >9</option>
                                                                                            <option value="10" >10</option>
                                                                                            <option value="11" >11</option>
                                                                                            <option value="12" >12</option>
                                                                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                            <select class="form-control" name="expiry_year">
                                                <option disabled selected>YYYY</option>
                                                                                            <option value="2024" >2024</option>
                                                                                            <option value="2025" >2025</option>
                                                                                            <option value="2026" >2026</option>
                                                                                            <option value="2027" >2027</option>
                                                                                            <option value="2028" >2028</option>
                                                                                            <option value="2029" >2029</option>
                                                                                            <option value="2030" >2030</option>
                                                                                            <option value="2031" >2031</option>
                                                                                            <option value="2032" >2032</option>
                                                                                            <option value="2033" >2033</option>
                                                                                            <option value="2034" >2034</option>
                                                                                    </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4" data-aos="fade-right" data-aos-duration="1000">
                                        <button type="submit" class="btn btn-submit1">submit</button>
                                </div>
                            </div>
        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Request Form End -->

    @stop
    @push('scripts')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $('#financial_form').validate({
        rules: {
            name: {
                required: true,
            },
            LName: {
                required: true,
            },
            email: {
                required: true,
            },
            phone: {
                required: true,
            },
            businessName: {
                required: true,
            },
            businessAddress: {
                required: true,
            },
            fundingPurpose: {
                required: true,
            },
            country: {
                required: true,
            },
            options: {
                required: true,
            },
            option: {
                required: true,
            },
            selecProgram: {
                required: true,
            },
            recent_income: {
                required: true,
            },
            inputFile: {
                required: true,
            }, full_name: {
                required: true,
            },
            card_number: {
                required: true,
                number: true,
                creditcard: true,
            },
            expiry_month: {
                required: true,
            },
            expiry_year: {
                required: true,
            },
            cvv: {
                required: true,
                number: true,
                maxlength: 4,
            },
        },
        messages: {
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            billing_email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.errorshow').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });

    $("body").on("submit", "#join_form", function (e) {
        var data = $('#email_valid').val();
        if(data=='not valid'){
            e.preventDefault();
        }
   });
</script>
@endpush