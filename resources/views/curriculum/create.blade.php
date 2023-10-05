@extends('layout.layout')
@section('title', 'Create curriculum')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-10">
                    <h1>
                        @yield('title')
                    </h1>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('curriculum.index') }}" type="button" class="float-right btn btn-primary">
                        <i class="fa fa-arrow-circle-left"></i>
                        Back
                    </a>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('curriculum.store')}}" method="POST">
                        @csrf
                        @method("POST")
                        <div class="card">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">School Year</label>
                                    <select class="form-control" name="school_year_id" required>
                                        @foreach ($schoolYears as $schoolYear)
                                            <option value="{{ $schoolYear->id }}">{{ $schoolYear->school_year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span>Select Subject:</span>
                                <hr>
                                <table id="datatable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Code</th>
                                            <th>Subject Description</th>
                                            <th>Pre-requisite</th>
                                            <th>Units</th>
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
                                                <td>
                                                    <input type="checkbox" name="subject_id[]" value="{{ $subject->id }}"
                                                        class="form-control" />
                                                </td>
                                                <td>{{ $subject->subject_code }}</td>
                                                <td>{{ $subject->subject_description }}</td>
                                                <td>{{ $subject->prerequisite }}</td>
                                                <td>{{ $subject->subject_unit }}</td>
                                            </tr>

                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
    </section>
@endsection
