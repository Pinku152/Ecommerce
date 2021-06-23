@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order Data</h3>
                        <!--
                        <div class="text-right">
                            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                        -->
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
                                <th>Product Name</th>
                                <th>User Name</th>
                                <th>Order Status</th>
                                <th>Payment Method</th>
                                <th>Address</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td><?php
                                        $product=\App\Models\Product::find($order->product_id);
                                        $user = \App\Models\User::find($order->user_id);
                                        ?>
                                        {{$product->name}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->payment_method}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->payment_status}}</td>

                                    <td>
                                            <a href="orders/{{$order->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
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





