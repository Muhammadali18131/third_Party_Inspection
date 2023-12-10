@extends('layouts.admin')
@section('content')
{{-- @dd($row) --}}
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card recent-sales">


                    <div class="card-body">
                        <h5 class="card-title">All Certifiate</h5>
                        <div class="text-end">
                            <a href="{{ route('certificate-create') }}" class="btn btn-primary">Add new</a>
                        </div>
                        @if ($row->isNotEmpty())
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Candidate</th>
                                        <th scope="col">Issue on</th>
                                        <th scope="col">Valid upto</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($row as $r)
                                        <tr>
                                            <th scope="row">#{{ str_pad($r->id, 5, '0', STR_PAD_LEFT) }}</a></th>
                                            <td><a href="{{ route('candidate-edit', ['id' => $r->id]) }}"
                                                    class="text-primary">{{ $r->name }}</a></td>
                                            <td>{{ $r->issue_on }}</td>
                                            <td>{{ $r->valid_upto }}</td>
                                            <td>
                                                <a href="{{ route('certificate-edit', ['id' => $r->certificate_id]) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="{{ route('certificate-delete', ['id' => $r->certificate_id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class="text-danger">No record exist </h3>
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
