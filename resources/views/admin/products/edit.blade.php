@extends('admin.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>



    <form role="form" method="POST" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                <label for="exampleInputCategory">Category</label>
                <select name="cat_id" class="form-control" readonly="readonly">
                    <?php
                    $category = \App\Models\Category::find($product->cat_id);
                    ?>
                        <option value="{{$category->id}}">{{$category->name}}</option>
                </select>

            </div>
            <div class="form-group">
                <label for="exampleInputSection">Name</label>

                <input type="text" value="{{$product->name}}" class="form-control" name="name" id="name" placeholder="Product name">
            </div>

            <div class="form-group">
                <label for="exampleInputSection">Price</label>

                <input type="number" value="{{$product->price}}" class="form-control" name="price" id="price" placeholder="Product Price">
            </div>

            <div class="form-group">
                <label for="exampleInputSection">Qty</label>

                <input type="number" value="{{$product->qty}}" class="form-control" name="qty" id="qty" placeholder="Product Qty">
            </div>

            <div class="form-group">
                <label for="exampleInputdata">Product Description</label>

                <textarea class="textarea" name="description" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Gallery</label>
                <div class="input-group">
                    <div class="custom-file">
                        <img src="../storage/{{$product->gallery}}">
                        <input type="file" class="custom-file-input" name="gallery" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>

@endsection


@push('footer-script')
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>

@endpush
