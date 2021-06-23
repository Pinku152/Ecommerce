@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Settings</h3>
                    </div>

                    <form role="form" method="post" action="/settings" >
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
                                <label for="exampleInputSection">Facebook Url </label>
                                <input type="text" value="{{$settings->facebook}}" class="form-control" name="facebook" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputSection">Gmail Url </label>
                                <input type="text" value="{{$settings->gmail}}" class="form-control" name="gmail" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputSection">Youtube Url </label>
                                <input type="text" value="{{$settings->youtube}}" class="form-control" name="youtube" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputSection">Twitter Url </label>
                                <input type="text" value="{{$settings->twitter}}" class="form-control" name="twitter" placeholder="Name">
                            </div>



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

