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
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Upload Certificate</label>
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
                                    <label for="field1" class="col-md-4 col-lg-3 col-form-label">Field 1</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field1" type="text" class="form-control" id="field1"
                                            value="{{ old('field1') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="field2" class="col-md-4 col-lg-3 col-form-label">Field 2</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field2" type="text" class="form-control" id="field2"
                                            value="{{ old('field2') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="field3" class="col-md-4 col-lg-3 col-form-label">Field 3</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field3" type="text" class="form-control" id="field3"
                                            value="{{ old('field3') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="field4" class="col-md-4 col-lg-3 col-form-label">Field 4</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field4" type="text" class="form-control" id="field4"
                                            value="{{ old('field4') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="field5" class="col-md-4 col-lg-3 col-form-label">Field 5</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field5" type="text" class="form-control" id="field5"
                                            value="{{ old('field5') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field6" class="col-md-4 col-lg-3 col-form-label">Field 6</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field6" type="text" class="form-control" id="field6"
                                            value="{{ old('field6') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field7" class="col-md-4 col-lg-3 col-form-label">Field 7</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field7" type="text" class="form-control" id="field7"
                                            value="{{ old('field7') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field8" class="col-md-4 col-lg-3 col-form-label">Field 8</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field8" type="text" class="form-control" id="field8"
                                            value="{{ old('field8') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field9" class="col-md-4 col-lg-3 col-form-label">Field 9</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field9" type="text" class="form-control" id="field9"
                                            value="{{ old('field9') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field10" class="col-md-4 col-lg-3 col-form-label">Field 10</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field10" type="text" class="form-control" id="field10"
                                            value="{{ old('field10') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field11" class="col-md-4 col-lg-3 col-form-label">Field 11</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field11" type="email" class="form-control" id="field11"
                                            value="{{ old('field11') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field12" class="col-md-4 col-lg-3 col-form-label">Field 12</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field12" type="text" class="form-control" id="field12"
                                            value="{{ old('field12') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field13" class="col-md-4 col-lg-3 col-form-label">Field 13</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field13" type="text" class="form-control" id="field13"
                                            value="{{ old('field13') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field14" class="col-md-4 col-lg-3 col-form-label">Field 14</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field14" type="text" class="form-control" id="field14"
                                            value="{{ old('field14') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="field15" class="col-md-4 col-lg-3 col-form-label">Field 15</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="field15" type="text" class="form-control" id="field15"
                                            value="{{ old('field15') }}">
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
