@extends('layouts.admin-without-nav')
@section('content')
    <section class="section profile container mt-5">
        <div class="pagetitle">
            <h1 class="fw-bold">Candidate Inspection</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Inspection</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <h5 class="card-title">View candidate information</h5>
                        <div class="tab-content pt-2">

                            <!-- Profile Overview Form -->
                            <form>

                                <div class="row">
                                    <div class="col-lg-10 col-md-8">
                                        <h5 class="card-title">About</h5>
                                        <p class="small fst-italic">{{ $row->field1 }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card">
                                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                <img src="{{ asset("assets/img/profile-img/$row->profile_img") }}"
                                                    alt="Image Not found!!!" class="bx-square-rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="card-title">Profile Details</h5>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Company</div>
                                            <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Job</div>
                                            <div class="col-lg-9 col-md-8">Web Designer</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Country</div>
                                            <div class="col-lg-9 col-md-8">USA</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone</div>
                                            <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                            <img src="{{ asset("assets/img/profile-img/$row->profile_img") }}"
                                                alt="Image Not found!!!" class="bx-square-rounded">
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                    <!-- End Bordered Tabs -->


                </div>
            </div>
        </div>

    </section>
@endsection
