@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category Data</h3>
                        <div class="text-right">
                            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif


                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Category</th>
                                <!--
                                <th>Action</th>
                                -->
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $index=>$category)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{$category->name}}</td>
                                    <!--
                                    <td>
                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                                            <!--
                                            @csrf
                                            <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i></button>
                                        </form>
                                    </td>
                                    -->

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <!--
                                <th>Action</th>
                                -->
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>


@endsection

@push('footer-script')

@endpush





