@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Products Data</h3>
                        <div class="text-right">
                            <a href="{{ route('products.create') }}" class="btn btn-primary">Add New</a>
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
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Gallery</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $index=>$product)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td><?php $category = \App\Models\Category::find($product->cat_id);
                                    ?>{{$category->name}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><img src="../storage/{{$product->gallery}}" style="height:50px;width:50px;"> </td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            @csrf
                                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    <!--
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Gallery</th>
                                <th>Action</th>
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





