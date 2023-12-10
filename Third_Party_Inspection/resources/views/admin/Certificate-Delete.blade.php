@extends('layouts.admin')
@section('content')
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title text-danger">Are you sure want to delete this certificate?</h5>
                        <!-- Bordered Tabs -->
                        <div class="tab-content pt-2">

                            <!-- Profile Insert Form -->
                            <form action="{{ route('certificate-destroy', ['id' => $row->certificate_id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')

                                <div class="row mt-5">
                                    <h5 class="card-title">Profile Details</h5>
                                    <div class="col-lg-10 col-md-8">
                                        <div class="col-md-8 col-sm-12">
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
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Issue on</div>
                                                <div class="col-lg-9 col-md-8">{{ $row->issue_on }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Valid Upto</div>
                                                <div class="col-lg-9 col-md-8">{{ $row->valid_upto }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Certificate</div>
                                                <div class="col-lg-9 col-md-8"><span class="badge bg-success mb-3"><a
                                                           target="_blank" href="{{ asset("assets/certificates/$row->certificate") }}" class="text-light mb-2">Click here to dwonload
                                                            certificate</a> </span></div>
                                            </div>
                                        </div>
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

                                <div class="text-end">
                                    <a href="{{ route('certificate') }}" class="btn btn-dark btn-lg">View all
                                        Certificates</a>
                                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                </div>
                            </form>
                            <!-- End Profile Insert Form -->
                        </div>

                    </div>
                    <!-- End Bordered Tabs -->


                </div>
            </div>
        </div>

    </section>
@endsection
