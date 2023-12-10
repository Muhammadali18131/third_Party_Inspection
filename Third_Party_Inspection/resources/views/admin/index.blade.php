@extends('layouts.admin')
@section('content')
    {{-- @dd($candidates) --}}
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">


                    <div class="col-md-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <h1 class="card-title"><i class="bi bi-people display-1"></i> Candidates | <span class="badge bg-success text-light"> {{ $candidates }} </span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <h1 class="card-title"> <i class="bi bi-file-earmark-richtext display-1"></i>Certificates | <span class="badge bg-success text-light"> {{ $certificates }} </span></h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
@endsection
