@extends('Admin.layout')

@section('content')
    <div class="m-5">
        <table id='course'>
            <thead>
                <th>Course Name</th>
                <th>Duration</th>
                <th>Start time</th>
                <th>End time</th>
                <th>image</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->duration }}</td>
                        <td>{{ $course->start_time }}</td>
                        <td>{{ $course->end_time }}</td>
                        <td><img src="{{ $course->image }}" alt="" width="40px" height="40px"></td>
                        <td>{{ $course->description }}</td>
                        <td> <a href="{{route('course.edit',['id'=> $course->id])}}" type="button" class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="{{ route('course.delete', ['id' => $course->id]) }}" type="button" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
                                class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $("#course").dataTable();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
@endsection

@section('style')
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" />
@endsection
