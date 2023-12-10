@extends('layouts.admin')
@section('content')
    {{-- @dd($row) --}}
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <h5 class="card-title">Update certificate information</h5>
                        <div class="tab-content pt-2">

                            <!-- Profile Insert Form -->
                            <form action="{{ route('certificate-update', ['id' => $row->certificate_id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Certificate</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="pt-2">
                                            {{-- <a href="#" class="btn btn-primary btn-sm"
                                                title="Upload new profile image"><i class="bi bi-upload"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-danger btn-sm"
                                                title="Remove my profile image"><i class="bi bi-trash"></i></a> --}}
                                            <span class="badge bg-success mb-3"><a
                                                    href="{{ asset("assets/certificates/$row->certificate") }}"
                                                    class="text-light mb-2" target='_blank'>Click here to download
                                                    certificate</a> </span>
                                            <input type="file" name="certificate" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="issue_on" class="col-md-4 col-lg-3 col-form-label">Issue on</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="issue_on" type="date" class="form-control" id="issue_on" required
                                            value="{{ $row->issue_on }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="valid_upto" class="col-md-4 col-lg-3 col-form-label">Valid Upto</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="valid_upto" type="date" class="form-control" id="valid_upto"
                                            required value="{{ $row->valid_upto }}">
                                    </div>
                                </div>


                                <div class="text-end">
                                    <a href="{{ route('certificate') }}" class="btn btn-dark btn-lg">View all
                                        Certificate</a>
                                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                </div>
                            </form>


                            <div class="row mt-5">
                                <h5 class="card-title">Profile Details</h5>
                                <div class="col-lg-10 col-md-8">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8">{{$row->name}}  {{$row->fname}}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone no</div>
                                            <div class="col-lg-9 col-md-8">{{$row->phone}}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8">{{$row->email}}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8">{{$row->address}}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Iqama no</div>
                                            <div class="col-lg-9 col-md-8">{{$row->iqama}}</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Summary</div>
                                            <div class="col-lg-9 col-md-8">{{$row->summary}}</div>
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


                            <!-- End Profile Insert Form -->
                        </div>

                    </div>
                    <!-- End Bordered Tabs -->


                </div>
            </div>
        </div>

    </section>
@endsection
