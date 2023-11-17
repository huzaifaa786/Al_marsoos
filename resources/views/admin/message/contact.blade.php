@extends('Admin.layout')

@section('content')
    <div class="m-5">
        <table id='datatable'>
            <thead>
                <th>Person Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Message</th>
                
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td><div style="overflow-y: scroll; height:100px;">{{$message->message}}</div></td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
<!-- Page level plugins -->
<script src="{{asset('admin/asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin/asset/js/demo/datatables-demo.js')}}"></script>
<link href="{{asset('admin/asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            
        });
    });
</script>
@endsection
