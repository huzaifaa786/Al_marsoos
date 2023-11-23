@extends('Admin.layout')

@section('content')
    <div class="m-5">
        <table id='scholars'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Image</th>
                <th>Qualification</th>
                <th>Experience</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($scholars as $scholar)
                    <tr>
                        <td>{{ $scholar->name }}</td>
                        <td>{{ $scholar->email }}</td>
                        <td>{{ $scholar->mobileno }}</td>
                        <td><img src="{{ $scholar->image }}" alt="" width="40px" height="40px"></td>
                        <td>{{ $scholar->qualification }}</td>
                        <td>{{ $scholar->experience }}</td>
                        <td>{{ $scholar->description }}</td>
                        <td> <a href="{{ route('scholar.edit', ['id' => $scholar->id]) }}" type="button"
                                class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="{{ route('scholar.delete', ['id' => $scholar->id]) }}" type="button"
                                onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"
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
            $("#scholars").dataTable();
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
