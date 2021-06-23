<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Cart;
use App\Models\Order;


use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        */
        $products = Product::all();
        return view('admin.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
        if($request->file()) {
            $fileName = time().'_'.$request->gallery->getClientOriginalName();
            $filePath = $request->file('gallery')->storeAs('', $fileName, 'public');

            $request->name = time().'_'.$request->gallery->getClientOriginalName();
            $request->file_path = '/storage/' . $filePath;
            //$req->save();
            $request->gallery->move(public_path($filePath), $fileName);
            //return $fileName;
        }
        $input = $request->all();
        $input['gallery'] = $fileName;

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
        if($request->file()) {
            $fileName = time().'_'.$request->gallery->getClientOriginalName();
            $filePath = $request->file('gallery')->storeAs('', $fileName, 'public');

            $request->name = time().'_'.$request->gallery->getClientOriginalName();
            $request->file_path = '/storage/' . $filePath;
            //$req->save();
            $request->gallery->move(public_path($filePath), $fileName);
            //return $fileName;
        }else{
            $fileName = "";
        }
        $input = $request->all();
        $input['gallery'] = $fileName;

        $product->update($input);

        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
    function detail($id)
    {
        $data =Product::find($id);
        $category = Category::find($data['cat_id']);
        $categories = Category::all();
        return view('product-detail',['product'=>$data,'category'=>$category,'categories'=>$categories]);
    }

    function filter($id){
        $category = Category::find($id);
        $categories = Category::all();
        /*
        $data = Product::where('cat_id', $id)
            ->orderBy('name')
            ->get();
        */

        $data = Product::where('cat_id', $id)->paginate(5);
        return view('shop',['products'=>$data,'category'=>$category,'categories'=>$categories]);
    }

    function search(Request $req)
    {
        $categories = Category::all();
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
            ->get();
        return view('search',['products'=>$data,'categories'=>$categories]);
    }


}
