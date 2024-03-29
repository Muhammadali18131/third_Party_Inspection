@extends('layouts.admin')
@section('content')
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title text-danger">Are you sure want to delete this candidate?</h5>
                        <!-- Bordered Tabs -->
                        <div class="tab-content pt-2">

                            <!-- Profile Insert Form -->
                            <form action="{{ route('candidate-destroy', ['id' => $row->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="{{ asset("assets/img/profile-img/$row->profile_img") }}" width="200"
                                            alt="Image not found !!!">
                                        <div class="pt-2">
                                            {{-- <a href="#" class="btn btn-primary btn-sm"
                                                title="Upload new profile image"><i class="bi bi-upload"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-danger btn-sm"
                                                title="Remove my profile image"><i class="bi bi-trash"></i></a> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="id" class="col-md-4 col-lg-3 col-form-label">ID</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="id" type="text" class="form-control" readonly id="id" value="{{ $row->id }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" readonly id="name" value="{{ $row->name }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="fname" class="col-md-4 col-lg-3 col-form-label">Father's Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fname" type="text" class="form-control" readonly id="fname" value="{{ $row->fname }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" readonly id="phone" value="{{ $row->phone }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="text" class="form-control" readonly id="email" value="{{ $row->email }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="address" type="text" class="form-control" readonly id="address" value="{{ $row->address }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="iqama" class="col-md-4 col-lg-3 col-form-label">Iqama</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="iqama" type="text" class="form-control" readonly id="iqama" value="{{ $row->iqama }}">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="summary" class="col-md-4 col-lg-3 col-form-label">Summary</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="summary" type="text" class="form-control" readonly id="summary" value="{{ $row->summary }}">
                                    </div>
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('candidate') }}" class="btn btn-dark btn-lg">View all
                                        Candidates</a>
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
