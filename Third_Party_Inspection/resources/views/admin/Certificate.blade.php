@extends('layouts.admin')
@section('content')
    <section class="section profile">
        <div class="row">



            <div class="col-xl-12">

                <div class="card recent-sales">


                    <div class="card-body">
                        <h5 class="card-title">All Certifiate</h5>
                        <div class="text-end">
                            <a href="{{ route('certificate-create') }}" class="btn btn-primary">Add new</a>
                        </div>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Field 1</th>
                                    <th scope="col">Field 2</th>
                                    <th scope="col">Field 3</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($row as $r)
                                    <tr>
                                        <th scope="row">#{{ str_pad($r->id, 5, '0', STR_PAD_LEFT) }}</a></th>
                                        <td><a href="{{ route('certificate-edit', ['id' => $r->id]) }}"
                                                class="text-primary">{{ $r->field3 }}</a></td>
                                        <td>{{ $r->field4 }}</td>
                                        <td>{{ $r->field5 }}</td>
                                        <td>
                                            <a href="{{ route('certificate-edit', ['id' => $r->id]) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('certificate-delete', ['id' => $r->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
