@extends('layout.layout')
@section('title', 'Curriculum')
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
                    <a href="{{ route('curriculum.create') }}" type="button" class="float-right btn btn-primary">
                        <i class="fa fa-plus-circle"></i>
                        Create
                    </a>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @if(empty($sch_year))
                <div class="col-12">
                    <div class="card">
                        <div class="p-5 card-body">
                            <h5 class="text-center">No Record Found!</h5>
                        </div>
                    </div>
                </div>
                @else
                @foreach ($sch_year as $year => $subjects)
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <strong class=" badge bg-danger">{{ $year }}</strong> <br><br>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Subject Code</th>
                                            <th>Subject Description</th>
                                            <th>Prerequisite</th>
                                            <th>Unit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subjects as $subject)
                                            <tr>
                                                <td>{{ $subject->subject->subject_code }}</td>
                                                <td>{{ $subject->subject->subject_description }}</td>
                                                <td>{{ $subject->subject->prerequisite }}</td>
                                                <td>{{ $subject->subject->subject_unit }}</td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                @endforeach
                @endif


            </div>
        </div>

    </section>

    @push('scripts')
    <script>
        $(document).ready(function() {
          $(".table").each(function() {
            $(this).dataTable();
          });
        });
      </script>
    @endpush

@endsection
