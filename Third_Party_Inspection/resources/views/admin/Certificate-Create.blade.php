@extends('layouts.admin')
@section('content')
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <h5 class="card-title">Add new certificate</h5>
                        <div class="tab-content pt-2">

                            <!-- Profile Insert Form -->
                            <form action="{{ route('certificate-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Upload
                                        Certificate</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="pt-2">
                                            {{-- <a href="#" class="btn btn-primary btn-sm"
                                                title="Upload new profile image"><i class="bi bi-upload"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-danger btn-sm"
                                                title="Remove my profile image"><i class="bi bi-trash"></i></a> --}}
                                            <input type="file" name="certificate" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field1" class="col-md-4 col-lg-3 col-form-label">Select Candidate</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if ($candidates->isEmpty())
                                            <span class="badge bg-danger">Please add candidate first</span>
                                        @endif
                                        <select class="form-select" aria-label="Default select example" name="candidate_id"
                                            @disabled($candidates->isEmpty())>
                                            <option selected>Please select</option>
                                            @foreach ($candidates as $c)
                                                <option value="{{ $c->id }}">
                                                    {{ $c->name . ' '  . ' ' . $c->phone }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="issue_on" class="col-md-4 col-lg-3 col-form-label">Issue on</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="issue_on" type="date" class="form-control" id="issue_on" required
                                            value="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="valid_upto" class="col-md-4 col-lg-3 col-form-label">Valid Upto</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="valid_upto" type="date" class="form-control" id="valid_upto"
                                            required <?php $date = date('Y-m-d'); ?>
                                            value="{{ date('Y-m-d', strtotime($date . ' + 1 year')) }}">
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
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
