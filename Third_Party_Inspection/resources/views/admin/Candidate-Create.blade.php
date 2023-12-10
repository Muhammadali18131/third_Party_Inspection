@extends('layouts.admin')
@section('content')
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <h5 class="card-title">Add new candidate</h5>
                        <div class="tab-content pt-2">

                            <!-- Profile Insert Form -->
                            <form action="{{ route('candidate-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="{{ asset('assets/img/profile-img/sample_profile_img.png') }}"
                                            width="200" alt="Profile">
                                        <div class="pt-2">
                                            {{-- <a href="#" class="btn btn-primary btn-sm"
                                                title="Upload new profile image"><i class="bi bi-upload"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-danger btn-sm"
                                                title="Remove my profile image"><i class="bi bi-trash"></i></a> --}}
                                            <input type="file" name="profile_img" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="name"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fname" class="col-md-4 col-lg-3 col-form-label">Father's Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fname" type="text" class="form-control" id="fname"
                                            value="{{ old('fname') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="phone"
                                            value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="address" type="text" class="form-control" id="address"
                                            value="{{ old('address') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="iqama" class="col-md-4 col-lg-3 col-form-label">Iqama</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="iqama" type="text" class="form-control" id="iqama"
                                            value="{{ old('iqama') }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="summary" class="col-md-4 col-lg-3 col-form-label">Summary</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="summary" type="text" class="form-control" id="summary"
                                            value="{{ old('summary') }}">
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn-lg btn btn-primary">Save</button>
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
