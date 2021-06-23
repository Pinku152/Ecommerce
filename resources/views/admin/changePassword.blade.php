@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Change Pasword</h3>
                    </div>

                    <form role="form" method="post" action="/admin/change-password" >
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
                                <label>Old Password <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="password" name="old_password" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label>New Password <span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="password" name="new_password" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input type="password" name="confirm_password"  class="form-control" > </div>
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
@push('footer-script')
@endpush

