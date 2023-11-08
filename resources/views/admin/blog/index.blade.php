@extends('admin.layout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
                <div class="mt-1 mb-4">
                    <a class="px-2 py-2 text-sm btn btn-primary bg-blue-600 rounded"
                        href="{{route('blog.create')}}">{{ __('Add Blog') }}</a>
                </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
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
                                    <td>{{ $blog->title }}</td>
                                    <td><div style="overflow-y: scroll; height:100px;">{!!$blog->body!!}</div></td>
                                    <td><img src="{{ asset($blog->image) }}" height="100" width="100" /></td>
                                    <td><a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-primary">Edit</a></td>
                                    <td><a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger">Delete</a></td>
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
        $('#datatable').DataTable({
            "iDisplayLength": 1
        });
    });
</script>
@endsection
