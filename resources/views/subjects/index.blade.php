@extends('layout.layout')
@section('title', 'Subjects')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>
                        @yield('title')
                    </h1>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#create">
                        <i class="fa fa-plus-circle"></i>
                        Create
                    </button>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Subject Code</th>
                                        <th>Subject Description</th>
                                        <th>Pre-requisite</th>
                                        <th>Units</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $page = 'subjects';
                                    @endphp
                                    @foreach ($subjects as $subject)
                                        @php
                                            $id = $subject->id;
                                        @endphp
                                        <tr>
                                            <td>{{ $subject->subject_code }}</td>
                                            <td>{{ $subject->subject_description }}</td>
                                            <td>{{ $subject->prerequisite }}</td>
                                            <td>{{ $subject->subject_unit }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-toggle="modal" data-target="#update{{ $id }}">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $id }}">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('subjects.update')
                                        @include('delete_modal')
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        @include('subjects.create')
        <!-- /.container-fluid -->
    </section>
@endsection
