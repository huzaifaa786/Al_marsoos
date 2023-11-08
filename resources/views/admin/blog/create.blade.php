@extends('admin.layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 pt-2">
                <div class="border rounded mt-5 p-4">
                    <h1 class="display-4">Create a New Post</h1>
                    <p class="lead">Fill and submit this form to create a post</p>

                    <hr>

                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" id="title" class="form-control" name="title" required
                                placeholder="Enter Post Title">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Post Body</label>
                            <textarea id="body" id="summernote" class="summernote" class="form-control" name="body"
                                placeholder="Enter Post Body" rows="5" ></textarea>
                            <div class="blog-post-body">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary btn-lg" type="submit">
                                    Create Post
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection()
