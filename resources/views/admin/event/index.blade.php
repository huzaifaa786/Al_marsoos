@extends('Admin.layout')

@section('content')
    <div class="m-5">
        <table id='event'>
            <thead>
                <th>Name</th>
                <th>Date</th>
                <th>Address</th>
                <th>Image</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->address }}</td>
                        <td><img src="{{ $event->image }}" alt="" width="40px" height="40px"></td>
                        <td>{{ $event->description }}</td>
                        <td> <a href="{{ route('event.edit', ['id' => $event->id]) }}" type="button"
                                class="btn btn-primary px-4">Edit</a>
                        </td>
                        <td> <a href="{{ route('event.delete', ['id' => $event->id]) }}" type="button"
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
            $("#event").dataTable();
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
