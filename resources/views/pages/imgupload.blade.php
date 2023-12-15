@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                                <h4 class="card-title">Upload Your Profile Photo</h4>
                                <p class="text-muted">You may upload only <code>.jpg</code>, <code>.jpeg</code>, <code>.png</code>, <code>.svg</code> file.</p>
                                <div>
                                    <form method="POST" action="{{route('image.upload')}}" enctype="multipart/form-data">
                                        @csrf
                                        <label for="formFile" class="form-label">File Upload to Public Folder</label>
                                        <input class="form-control" type="file" name="image" id="formFile">
                                        <button class="btn btn-primary mt-3">Upload</button>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    {{-- CONTAINER ENDS --}}
</div>
@endsection