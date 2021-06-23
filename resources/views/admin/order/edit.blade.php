@extends('admin.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Order Status</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <form role="form" method="post" action="" >
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible">
                {{session('message')}}
            </div>
        @endif

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputSection">Delivery Status</label>
                    <select name="status" class="form-control">
                        <option value="pending" @if (old('status') == "pending") {{ 'selected' }} @endif>Pending</option>
                        <option value="In-Transit" @if (old('status') == "In-Transit") {{ 'selected' }} @endif>In-Transit</option>
                        <option value="Out For Delivery" @if (old('status') == "Out For Delivery") {{ 'selected' }} @endif>Out For Delivery</option>
                        <option value="Delivered" @if (old('status') == "Delivered") {{ 'selected' }} @endif>Delivered</option>
                    </select>
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>

@endsection

@push('footer-script')

@endpush
