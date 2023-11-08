@extends('Admin.layout')

@section('content')
    <div class="m-5">
        <table id='student'>
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Admission Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->father_name }}</td>
                        <td>{{ $student->number }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->date_of_birth }}</td>
                        <td>{{ $student->admission_date }}</td>
                        <td> <a href="{{route('student.edit',['id'=> $student->id])}}" type="button" class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="{{ route('student.delete', ['id' => $student->id]) }}" type="button" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
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
            $("#student").dataTable();
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
