@extends('admin.layout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>
                <div class="mt-1 mb-4">
                    <a class="px-2 py-2 text-sm btn btn-primary bg-blue-600 rounded"
                        href="{{ route('admin.blog.createblog') }}">{{ __('Add Blog') }}</a>
                </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td> {!!$blog->body!!}</td>
                                    <td><img src="{{ asset($blog->image) }}" height="100" width="100" /></td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection()
@section('script')
<!-- Page level plugins -->
<script src="{{asset('admin/asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin/asset/js/demo/datatables-demo.js')}}"></script>
<link href="{{asset('admin/asset/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
@endsection
