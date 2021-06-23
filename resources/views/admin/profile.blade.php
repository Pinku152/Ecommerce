@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Profile Information</h3>
                    </div>

                    <form role="form" method="post" action="/admin/profile/{{$user->id}}" >
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputSection">Name</label>
                                <input type="text" value="{{$user->name}}" class="form-control" name="name" placeholder="Name">
                            </div>

                            <!--
                            <div class="form-group">
                                <label for="exampleInputSection">Phone</label>
                                <input type="text" value="{{$user->phone}}"  class="form-control" name="phone" id="meta_title" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <img src="{{$user->image}}" height="100px" width="100px">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            -->

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
@push('footer-script')
@endpush

