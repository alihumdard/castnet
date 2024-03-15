@extends('web.layouts.default')
@section('content')
<style>
    .section_dashboard .dashboard_side {
    background: var(--primary);
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    gap: 1rem;
    padding: 1.8rem;
}
.form-select {
    border-radius: 0.5rem;
    border: 0.1rem solid var(--gray-seven);
    color: var(--gray);
    font-size: 1.4rem;
    font-weight: 400;
    padding: 1.8rem;
}
.section_dashboard .dashboard_side .profile-box {
    text-align: center;
}
.checkbox-border {
    border: 0.1rem solid var(--secondary);
    padding: 3rem 2rem;
    margin-top: 2rem;
    position: relative;
}
.section_dashboard .dashboard_side .profile-img {
    height: auto;
    max-width: 8rem;
}

.section_dashboard .dashboard_side .profile-text {
    font-size: 1.6rem;
    color: var(--white);
    margin-top: 1rem;
}

.section_dashboard .dashboard_side .dashboard-links .icons {
    height: auto;
    max-width: 1.2rem;
}

.section_dashboard .dashboard_side .dashboard-link {
    color: var(--white);
    text-transform: capitalize;
    font-size: 1.3rem;
}

.section_dashboard .dashboard_content .section_content {
    padding: 1.5rem 0;
}

.section_dashboard .section_content .section_title {
    text-align: center;
    color: var(--primary);
    font-weight: 700;
    font-size: 2.4rem;
}

.section_dashboard .section_content .input-box {
    border-bottom: 0.1rem solid var(--primary);
    padding: 1rem 0;
}

.section_dashboard .section_content .input-box:last-of-type {
    border-bottom: none;
    padding-bottom: 0;
}

.section_dashboard .section_content .input-box label {
    color: var(--primary);
    font-weight: 700;
    font-size: 1.6rem;
}

.section_dashboard .section_content .input-box .form-control {
    border: none;
    font-size: 1.4rem;
    color: var(--dark-charcoal);
}

.section_dashboard .section_content .input-box .form-control:focus {
    box-shadow: none;
}

.section_dashboard .section_content .input-box .form-control::placeholder {
    color: var(--dark-charcoal);
}

.section_dashboard .section_content .input-box .input-group-text {
    background: none;
    border: none;
}

@media screen and (min-width:992px) {
    .section_dashboard .section_content .input-box label {
        width: 100%;
        max-width: 14.5rem;
    }

    .section_dashboard .section_content .section_title {
        font-size: 3.4rem;
    }

    .section_dashboard .dashboard_side .profile-text {
        font-size: 2.4rem;
    }

    .section_dashboard .dashboard_side .profile-img {
        height: auto;
        max-width: 14rem;
    }

    .section_dashboard .dashboard_side {
        max-width: 250px;
        height: 100vh;
        justify-content: unset;
        padding: 4rem 0;
    }

    .w-lg-100 {
        width: 100%;
    }

    .section_dashboard .dashboard_side .dashboard-links {
        background: transparent;
        padding: 1.5rem;
        border-bottom: 0.1rem solid var(--white);
        width: 100%;
    }

    .section_dashboard .dashboard_side .dashboard-link {
        width: 100%;
        font-size: 1.6rem;
        font-weight: 500;
        transition: all 0.2s ease-in-out;
    }

    .section_dashboard .dashboard_side .dashboard-link:hover {
        background: var(--white);
    }

    .section_dashboard .dashboard_side .dashboard-link.active {
        background: var(--white);
    }

    .section_dashboard .dashboard_side .dashboard-link:hover span {
        color: var(--primary);
    }

    .section_dashboard .dashboard_side .dashboard-link.active span {
        color: var(--primary);
    }

    .section_dashboard .dashboard_side .dashboard-link:hover .icons {
        filter: brightness(0) invert(8%) sepia(15%) saturate(5867%) hue-rotate(190deg) brightness(97%) contrast(98%);
    }

    .section_dashboard .dashboard_side .dashboard-link.active .icons {
        filter: brightness(0) invert(8%) sepia(15%) saturate(5867%) hue-rotate(190deg) brightness(97%) contrast(98%);
    }

    .section_dashboard .section_content .input-box {
        display: flex;
        align-items: center;
        padding: 1.5rem 0;
    }
}







/ form-csss /

form.is-readonly .btn-save {
    display: none;
}

form.is-readonly input[disabled],
form.is-readonly textarea[disabled] {
    cursor: text;
    background-color: #fff;
    border-color: #f7f7f7;
    outline-color: transparent;
    box-shadow: none;
    padding: 1.5rem 1rem;
}

form.is-editing .btn-edit {
    display: none;
}

form .form-group input.form-control {
    font-size: 18px !important;
    padding: 1.5rem 1rem !important;
    color: #919191;
    font-weight: normal;
}

form .form-group label {
    font-size: 18px;
    font-weight: 700;
    color: #071B34;
    margin-bottom: 10px;
}

.is-readonly .form-edit-btns .btn-default.btn-edit {
    background: #071B34;
    color: white;
}
.section_dashboard .dashboard_side {
        max-width: 250px;
        height: auto;
        justify-content: unset;
        padding: 4rem 0;
    }
</style>
@php
// dd($sponsorInfo[0]);
$setting = appSetting();
@endphp


    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb partners_sponsors_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">User Dashboard</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->


        <!-- Dashboard Start -->
        <section class="section_dashboard">
            <div class="container-fluid px-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="d-flex flex-column flex-lg-row gap-3">
                            <div class="dashboard_side flex-lg-grow-1">
                                <div class="profile-box">
                                    <img src="{{ asset('assets/web/images/dashboard_profile.png') }}" alt="profile" class="profile-img">
                                    <h3 class="profile-text mb-3">{{ Auth::user()->first_name }}</h3>
                                </div>
                                <div class="d-flex gap-4 gap-lg-0 align-items-center justify-content-center flex-lg-column flex-wrap w-lg-100 tab-list">
                                    @if (!$memberInfo->isEmpty())
                                    <a class="dashboard-link tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">
                                        <div class="dashboard-links">
                                            <div class="d-flex align-items-center gap-2 gap-lg-4">
                                                <img src="{{ asset('assets/web/images/icon_group.png') }}" alt="icon" class="icons">
                                                <span>member</span>
                                            </div>
                                        </div>
                                    </a>
                                    @endif
                                    @if (!$sponsorInfo->isEmpty())
                                    <a class="dashboard-link tablinks {{ $memberInfo->isEmpty() ? 'active' : '' }}" onclick="openTab(event, 'secondTab')" id="defaultOpen">
                                        <div class="dashboard-links">
                                            <div class="d-flex align-items-center gap-2 gap-lg-4">
                                                <img src="{{ asset('assets/web/images/icon_group.png') }}" alt="icon" class="icons">
                                                <span>sponser</span>
                                            </div>
                                        </div>
                                    </a>
                                    @endif  
                                    @if (!$partnerInfo->isEmpty())
                                    <a class="dashboard-link tablinks {{ $sponsorInfo->isEmpty() ? 'active' : '' }}" onclick="openTab(event, 'thirdTab')" id="defaultOpen">
                                        <div class="dashboard-links">
                                            <div class="d-flex align-items-center gap-2 gap-lg-4">
                                                <img src="{{ asset('assets/web/images/icon_group.png') }}" alt="icon" class="icons">
                                                <span>partner</span>
                                            </div>
                                        </div>
                                    </a>
                                    @endif 
                                </div>
                            </div>
                            <div class="dashboard_content flex-lg-grow-1">
                            @if (!$memberInfo->isEmpty())
                                <section class="section_content tabcontent" id="firstTab">
                                    <div class="container-fluid">
                                        <div class="row mb-5">
                                            <div class="col-12 mt-3">
                                                <h2 class="section_title">Member Detail</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form class="is-readonly" method="POST" action="{{ route('member.update') }}">
                                               @csrf
    
                                                <div class="row row-cols-1 row-cols-md-2 gy-4 gx-4">
                                                    <div class="col">
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Organization Name:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="organization_name" value="{{ $memberInfo[0]->organization_name }}">
                                                            <input type="hidden" name="member_id" value="{{ $memberInfo[0]->id }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Phone Number</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="phone_number" value="{{ $memberInfo[0]->phone_number }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Website Address</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="website_address" value="{{ $memberInfo[0]->website_address }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Number Of Employees</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="number_of_employees" value="{{ $memberInfo[0]->number_of_employees }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing Email</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_email" value="{{ $memberInfo[0]->billing_email }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing Address</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_address" value="{{ $memberInfo[0]->billing_address }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing City</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_city" value="{{ $memberInfo[0]->billing_city }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing State</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_stat" value="{{ $memberInfo[0]->billing_state }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing Zip</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_zip" value="{{ $memberInfo[0]->billing_zip }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing Country</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_country" value="{{ $memberInfo[0]->billing_country }}">
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="col">
                                                       
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Billing Address Check</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="billing_address_check" value="{{ $memberInfo[0]->billing_address_check }}">
                                                        </div>
                                                     
                                                       
                                                        
                                                       
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">First Name</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="first_name" value="{{ $memberInfo[0]->first_name }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Last Name</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="last_name" value="{{ $memberInfo[0]->last_name }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Title</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="title" value="{{ $memberInfo[0]->title }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Primary Phone</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="primary_phone" value="{{ $memberInfo[0]->primary_phone }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Email</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="email" value="{{ $memberInfo[0]->email }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Membership Level</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="membership_level" value="{{ $memberInfo[0]->membership_level }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">About Organization</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="about_organization" value="{{ $memberInfo[0]->about_organization }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Ownership Structure</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="ownership_structure" value="{{ $memberInfo[0]->ownership_structure }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Reason Joining</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="reason_joining" value="{{ $memberInfo[0]->reason_joining }}">
                                                        </div>
                                                       
                                                    </div>
    
    
    
                                                </div>
                                                <div class="row justify-content-end form-edit-btns mb-3 me-2">
                                                    <button type="submit" class="btn btn-default btn-edit">Update</button>
                                                </div>
    
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            @endif
                            @if (!$sponsorInfo->isEmpty())
                                <section class="section_content tabcontent" id="secondTab" style="display: {{ !$memberInfo->isEmpty() ? 'none' : 'block' }}">
                                    <div class="container-fluid">
                                        <div class="row mb-5">
                                            <div class="col-12 mt-3">
                                                <h2 class="section_title">Sponser Detail</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form class="is-readonly" method="post" action="{{ route('sponsor.update') }}">
                                             @csrf
    
                                                <div class="row row-cols-1 row-cols-md-2 gy-4 gx-4">
                                                    <div class="col">
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Sponsor Name:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="sponsor_name" value="{{ $sponsorInfo[0]->sponsor_name }}" >
                                                            <input type="hidden" name="sponsor_id" value="{{ $sponsorInfo[0]->id }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Contact Person Name:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="contact_person_name" value="{{ $sponsorInfo[0]->contact_person_name }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Email:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="email" value="{{ $sponsorInfo[0]->email }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Phone Number:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="phone_number" value="{{ $sponsorInfo[0]->phone_number }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Website URL:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="website_url" value="{{ $sponsorInfo[0]->website_url }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Sponsorship Interest Area:</label>
                                                            <select class="form-select" name="industry_sector">
                                                                <option disabled>Industry Sectors</option>
                                                                <option value="construction" {{ $sponsorInfo[0]->industry_sector == 'construction' ? 'selected' : '' }}>Construction</option>
                                                                <option value="agriculture" {{ $sponsorInfo[0]->industry_sector == 'agriculture' ? 'selected' : '' }}>Agriculture</option>
                                                                <option value="supply_chain" {{ $sponsorInfo[0]->industry_sector == 'supply_chain' ? 'selected' : '' }}>Supply Chain</option>
                                                                <option value="technology" {{ $sponsorInfo[0]->industry_sector == 'technology' ? 'selected' : '' }}>Technology</option>
                                                                <option value="natural_resources" {{ $sponsorInfo[0]->industry_sector == 'natural_resources' ? 'selected' : '' }}>Natural Resources</option>
                                                                <option value="energy" {{ $sponsorInfo[0]->industry_sector == 'energy' ? 'selected' : '' }}>Energy</option>
                                                                <option value="textiles" {{ $sponsorInfo[0]->industry_sector == 'textiles' ? 'selected' : '' }}>Textiles</option>
                                                                <option value="advocacy" {{ $sponsorInfo[0]->industry_sector == 'advocacy' ? 'selected' : '' }}>Advocacy</option>
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="form-group mb-3">
                                                          
                                                            <select class="form-select" name="specific_interest">
                                                                <option disabled>Specific Interest in Sponsorship</option>
                                                                <option value="events" {{ $sponsorInfo[0]->specific_interest === 'events' ? 'selected' : '' }}>Events</option>
                                                                <option value="programs" {{ $sponsorInfo[0]->specific_interest === 'programs' ? 'selected' : '' }}>Programs</option>
                                                                <option value="advocacy_for_indigenous_people" {{ $sponsorInfo[0]->specific_interest === 'advocacy_for_indigenous_people' ? 'selected' : '' }}>Advocacy for Indigenous People</option>
                                                                <option value="women" {{ $sponsorInfo[0]->specific_interest === 'women' ? 'selected' : '' }}>Women</option>
                                                                <option value="veterans" {{ $sponsorInfo[0]->specific_interest === 'veterans' ? 'selected' : '' }}>Veterans</option>
                                                                <option value="disabled_persons" {{ $sponsorInfo[0]->specific_interest === 'disabled_persons' ? 'selected' : '' }}>Disabled Persons</option>
                                                                <option value="young_entrepreneurs" {{ $sponsorInfo[0]->specific_interest === 'young_entrepreneurs' ? 'selected' : '' }}>Young Entrepreneurs</option>
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Geographic Focus:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="geographic_focus" value="{{ $sponsorInfo[0]->geographic_focus }}" >
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">Sponsorship Level Preferences:</label>
                                                            {{-- <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="sponsorship_level" value="{{ $sponsorInfo[0]->sponsorship_level }}" > --}}

                                                            <div class="row gy-3">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" name="sponsorship_level" id="platinum_sponsor" value="Platinum Sponsor" {{ $sponsorInfo[0]->sponsorship_level === 'Platinum Sponsor' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="platinum_sponsor">Platinum Sponsor</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" name="sponsorship_level" id="gold_sponsor" value="Gold Sponsor" {{ $sponsorInfo[0]->sponsorship_level === 'Gold Sponsor' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="gold_sponsor">Gold Sponsor</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" name="sponsorship_level" id="silver_sponsor" value="Silver Sponsor" {{ $sponsorInfo[0]->sponsorship_level === 'Silver Sponsor' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="silver_sponsor">Silver Sponsor</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" name="sponsorship_level" id="custom_sponsorship" value="Custom Sponsorship" {{ $sponsorInfo[0]->sponsorship_level === 'Custom Sponsorship' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="custom_sponsorship">Custom Sponsorship</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            


                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Sponsorship Goals:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="sponsorship_goals" value="{{ $sponsorInfo[0]->sponsorship_goals }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Sponsorship Experiences:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="sponsorship_experiences" value="{{ $sponsorInfo[0]->sponsorship_experiences }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Sponsorship Preferences:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="sponsorship_preferences" value="{{ $sponsorInfo[0]->sponsorship_preferences }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Sponsorship Budget</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="sponsorship_budget" value="{{ $sponsorInfo[0]->sponsorship_budget }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Payment Schedule</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="payment_schedule" value="{{ $sponsorInfo[0]->payment_schedule }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Additional Support</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="additional_support" value="{{ $sponsorInfo[0]->additional_support }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Hear About</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="hear_about" value="{{ $sponsorInfo[0]->hear_about }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Data Protection Consent</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="data_protection_consent" value="{{ $sponsorInfo[0]->data_protection_consent }}" >
                                                        </div>
                                                    </div>
    
    
    
                                                </div>
                                                <div class="row justify-content-end form-edit-btns mb-3 me-2">
                                                    <button type="submit" class="btn btn-default btn-edit">Update</button>
                                                </div>
    
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            @endif
                            @if (!$partnerInfo->isEmpty())
                                <section class="section_content tabcontent" id="thirdTab" style="display: {{ !$sponsorInfo->isEmpty() || !$memberInfo->isEmpty() ? 'none' : 'block' }}">
                                    <div class="container-fluid">
                                        <div class="row mb-5">
                                            <div class="col-12 mt-3">
                                                <h2 class="section_title">Partner Detail</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form class="is-readonly" method="post" action="{{ route('partner.update') }}">
                                             @csrf
    
                                                <div class="row row-cols-1 row-cols-md-2 gy-4 gx-4">
                                                    <div class="col">
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Organization Name:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="organization_name" value="{{ $partnerInfo[0]->organization_name }}" >
                                                            <input type="hidden" name="partner_id" value="{{ $partnerInfo[0]->id }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Contact Person Name:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="contact_person_name" value="{{ $partnerInfo[0]->contact_person_name }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Email:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="email" value="{{ $partnerInfo[0]->email }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Phone Number:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="phone_number" value="{{ $partnerInfo[0]->phone_number }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Organization Website:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="organization_website" value="{{ $partnerInfo[0]->organization_website }}" >
                                                        </div> <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Industry Sector:</label>
                                                            <select class="form-select form-control" name="industry_sector">
                                                                <option selected disabled>Industry Sectors</option>
                                                                <option value="construction" {{ $partnerInfo[0]->industry_sector == 'construction' ? 'selected' : '' }}>Construction</option>
                                                                <option value="agriculture" {{ $partnerInfo[0]->industry_sector == 'agriculture' ? 'selected' : '' }}>Agriculture</option>
                                                                <option value="supply chain" {{ $partnerInfo[0]->industry_sector == 'supply chain' ? 'selected' : '' }}>Supply Chain</option>
                                                                <option value="technology" {{ $partnerInfo[0]->industry_sector == 'technology' ? 'selected' : '' }}>Technology</option>
                                                                <option value="natural_resources" {{ $partnerInfo[0]->industry_sector == 'natural_resources' ? 'selected' : '' }}>Natural Resources</option>
                                                                <option value="energy" {{ $partnerInfo[0]->industry_sector == 'energy' ? 'selected' : '' }}>Energy</option>
                                                                <option value="textiles" {{ $partnerInfo[0]->industry_sector == 'textiles' ? 'selected' : '' }}>Textiles</option>
                                                                <option value="advocacy" {{ $partnerInfo[0]->industry_sector == 'advocacy' ? 'selected' : '' }}>Advocacy</option>
                                                            </select>

                                                        </div> <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">Duration Of Partnership:</label>
                                                            <div class="row gy-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-check d-inline-block">
                                                                        <input type="radio" class="form-check-input" value="Short-Term" name="partnership_dur" id="short_term" {{ $partnerInfo[0]->partnership_dur == 'Short-Term' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="short_term">Short-Term</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 text-md-center">
                                                                    <div class="form-check d-inline-block">
                                                                        <input type="radio" class="form-check-input" value="Long Term" name="partnership_dur" id="long_term" {{ $partnerInfo[0]->partnership_dur == 'Long Term' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="long_term">Long-Term</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>

                                                        </div> <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">Type Of Partnership Interest:</label>
                                                            <div class="row gy-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="Project Collaboration" name="partnership_interest" id="project_collaboration" {{ $partnerInfo[0]->partnership_interest == 'Project Collaboration' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="project_collaboration">Project Collaboration</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="In-Kind Support" name="partnership_interest" id="kind_support" {{ $partnerInfo[0]->partnership_interest == 'In-Kind Support' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="kind_support">In-Kind Support</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="Expertise Sharing" name="partnership_interest" id="expertise_sharing" {{ $partnerInfo[0]->partnership_interest == 'Expertise Sharing' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="expertise_sharing">Expertise Sharing</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input type="radio" class="form-check-input" value="Advocacy Programs" name="partnership_interest" id="advocacy_programs" {{ $partnerInfo[0]->partnership_interest == 'Advocacy Programs' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="advocacy_programs">Advocacy Programs</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div> <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">Previous Partnership Experience:</label>
                                                            <div class="row gy-3">
                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input type="radio" value="Yes" class="form-check-input" name="previous_partnership" id="prev_yes" {{ $partnerInfo[0]->previous_partnership == 'Yes' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="prev_yes">Yes</label>
                                                                        @if ($partnerInfo[0]->previous_partnership == 'Yes')
                                                                            <input type="text" class="form-control" placeholder="Details about past partnership experiences" name="past_partnership_details" value="{{ $partnerInfo[0]->past_partnership_details }}">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input type="radio" value="No" class="form-check-input" name="previous_partnership" id="prev_no" {{ $partnerInfo[0]->previous_partnership == 'No' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="prev_no">No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div> <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Target Geographic Regions:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="target_geographic_regions" value="{{ $partnerInfo[0]->target_geographic_regions }}" >
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Project Opportunities:</label>
                                                            <textarea style="font-size: 16px;" cols="30" rows="3" class="form-control" placeholder="Project Opportunities" name="project_opportunities">{{$partnerInfo[0]->project_opportunities}}</textarea>
                                                        </div> <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Non-Monetary Support:</label>
                                                          
                                                            <textarea style="font-size: 16px;"  cols="30" rows="3" class="form-control" placeholder="Non-Monetary Support Offered (e.g., services, expertise, equipment, software)" name="non_monetary_support">{{ $partnerInfo[0]->non_monetary_support }}</textarea>
                                                        </div> <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Goals And Objectives Of Partnership:</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="partnering_goals" value="{{ $partnerInfo[0]->partnering_goals }}" >
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Preferred Terms Of Partnership:</label>
                                                            <textarea style="font-size: 16px;" cols="30" rows="3" class="form-control" placeholder="Expected Outcomes and Deliverables" name="expected_outcomes">{{ $partnerInfo[0]->expected_outcomes }}</textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Non-Monetary Support Offered:</label>
                                                            <textarea style="font-size: 16px;" cols="30" rows="3" class="form-control" placeholder="Non-Monetary Support Offered (e.g., services, expertise, equipment, software)" name="non_monetary_support_offered" spellcheck="false">{{ $partnerInfo[0]->non_monetary_support_offered }}</textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">Legal Compliance and Agreements:</label>
                                                            <div class="row gy-3">
                                                                <div class="col-12">
                                                                    <div class="form-check errorshow">
                                                                        <input type="checkbox" class="form-check-input" name="legal_compliance_agree" id="legal_compliance_agree" value="Agreement to discuss legal terms and conditions" {{ $partnerInfo[0]->legal_compliance_agree ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="legal_compliance_agree">Agreement to discuss legal terms and conditions</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-check errorshow">
                                                                        <input type="checkbox" class="form-check-input" name="legal_compliance_understanding" id="legal_compliance_understanding" value="Understanding of data protection and privacy policy" {{ $partnerInfo[0]->legal_compliance_understanding ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="legal_compliance_understanding">Understanding of data protection and privacy policy</label>
                                                                    </div>
                                                                </div>                                            
                                                            </div>
                                                        </div>
                                                        </div>
                                                        {{-- <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Legal Compliance Understanding</label>
                                                            <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="legal_compliance_understanding" value="{{ $partnerInfo[0]->legal_compliance_understanding }}" >
                                                        </div> --}}
                                                        <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">How Did You Hear About Us?</label>
                                                            {{-- <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="hear_about" value="{{ $partnerInfo[0]->hear_about }}" > --}}
                                                            <div class="row gy-3">
                                                                <div class="col-lg-3">
                                                                    <div class="form-check errorshow">
                                                                        <input type="radio" class="form-check-input" name="hear_about" id="social_media" value="Social Media" {{ $partnerInfo[0]->hear_about == 'Social Media' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="social_media">Social Media</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-check errorshow">
                                                                        <input type="radio" class="form-check-input" name="hear_about" id="referral" value="Referral" {{ $partnerInfo[0]->hear_about == 'Referral' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="referral">Referral</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-check errorshow">
                                                                        <input type="radio" class="form-check-input" name="hear_about" id="event" value="Event" {{ $partnerInfo[0]->hear_about == 'Event' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="event">Event</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-check errorshow">
                                                                        <input type="radio" class="form-check-input" name="hear_about" id="online_search" value="Online Search" {{ $partnerInfo[0]->hear_about == 'Online Search' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="online_search">Online Search</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <div class="d-flex gap-4 align-items-center errorshow">
                                                                            <div>
                                                                                <input type="radio" class="form-check-input" name="hear_about" id="hear_other" value="Other" {{ $partnerInfo[0]->hear_about != 'Social Media' && $partnerInfo[0]->hear_about != 'Referral' && $partnerInfo[0]->hear_about != 'Event' && $partnerInfo[0]->hear_about != 'Online Search' ? 'checked' : '' }}>
                                                                                <label class="form-check-label" for="hear_other">Other</label>
                                                                            </div>
                                                                            <input type="text" class="form-control w-md-50" placeholder="Details about past partnership experiences">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div> <div class="form-group mb-3">
                                                            <label for="exampleInputPassword1">Additional Information:</label>
                                                            <textarea style="font-size: 16px;" cols="30" rows="3" class="form-control" placeholder="Information" name="additional_information">{{ $partnerInfo[0]->additional_information }}</textarea>
                                                        </div> <div class="form-group mb-3">
                                                            <div class="checkbox-border">
                                                            <label for="exampleInputPassword1">Data Protection Consent:</label>
                                                            {{-- <input type="text" class="form-control " id="exampleInputPassword1" placeholder="Name" name="data_protection_consent" value="{{ $partnerInfo[0]->data_protection_consent }}" > --}}
                                                            <div class="form-check d-inline-block errorshow">
                                                                <input type="radio" class="form-check-input" name="data_protection_consent" id="data_consent" value="Store and use the provided information for partnership purposes according to privacy laws" {{ $partnerInfo[0]->data_protection_consent == 'Store and use the provided information for partnership purposes according to privacy laws' ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="data_consent">Store and use the provided information for partnership purposes according to privacy laws</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end form-edit-btns mb-3 me-2">
                                                    {{-- <button type="submit" class="btn btn-default btn-edit">Update</button> --}}
                                                </div>
    
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard End -->
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.icon-container').click(function () {
            var icon = $(this).find('.icon');
            var currentSrc = icon.attr('src');
            var newSrc = currentSrc.includes('assets/images/icon_edit.png') ? 'assets/images/save.png' : 'assets/images/icon_edit.png';
            icon.attr('src', newSrc);
        });
    });
    // $(document).ready(function () {
    //     $('.js-edit, .js-save').on('click', function () {
    //         var $form = $(this).closest('form');
    //         $form.toggleClass('is-readonly is-editing');
    //         var isReadonly = $form.hasClass('is-readonly');
    //         $form.find('input,textarea').prop('disabled', isReadonly);
    //     });
    // });
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>


