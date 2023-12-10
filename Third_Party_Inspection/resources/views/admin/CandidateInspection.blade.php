@extends('layouts.admin-without-nav')
@section('content')
    <section class="section profile container mt-5">
        <div class="pagetitle text-center">
            <h1 class="fw-bold">National Inspection Technical Testing CO. LTD.</h1>
        </div><!-- End Page Title -->
        <div class="row">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <h5 class="card-title">Candidate Inspection</h5>
                        <div class="tab-content pt-2">

                            <!-- Profile Overview Form -->
                            <form>

                                <div class="row">
                                    <div class="col-lg-10 col-md-8">
                                        <h5 class="card-title">About</h5>
                                        <p class="small fst-italic">{{ $row->summary }}</p>
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
                                    <div class="col-md-10 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8">{{ $row->name }} {{ $row->fname }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone no</div>
                                            <div class="col-lg-9 col-md-8">{{ $row->phone }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">{{ $row->email }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">{{ $row->address }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Iqama no</div>
                                            <div class="col-lg-9 col-md-8">{{ $row->iqama }}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Summary</div>
                                            <div class="col-lg-9 col-md-8">{{ $row->summary }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12">
                                        <div class="card">
                                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                                <img src="{{ asset('assets/img/qr-code.png') }}" alt="Image Not found!!!"
                                                    class="bx-square-rounded">
                                            </div>
                                        </div>
                                    </div>
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
