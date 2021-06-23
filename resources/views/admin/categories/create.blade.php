@extends('admin.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <form role="form" method="post" action="{{ route('categories.store') }}" >
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
                <label for="exampleInputSection">Name</label>

                <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
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
