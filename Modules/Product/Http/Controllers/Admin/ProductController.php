<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Models\Product;
use Modules\Product\Entities\Models\ProductCategory;
use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Product\Http\Requests\UpdateProductRequest;
use DataTables;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);

        return view('product::admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = ProductCategory::where(['parent_id' => null, 'subparent_id' => null])->get();

        return view('product::admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
      $ids = array_merge(
        is_array($request->input('category_id')) ? $request->input('category_id') : [],
        is_array($request->input('subcategory_id')) ? $request->input('subcategory_id') : [],
        is_array($request->input('subsubcategory_id')) ? $request->input('subsubcategory_id') : []
      );
      
      $product = Product::create($request->all());
      $product->allCategories()->sync($ids);

      \Session::flash('class','success');
      \Session::flash('message','Product successfully saved.');

      return redirect()->route('admin.product.edit', $product->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        dd('show');
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::where(['parent_id' => null, 'subparent_id' => null])->get();

        return view('product::admin.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateProductRequest  $request, $id)
    {
      $ids = array_merge(
        is_array($request->input('category_id')) ? $request->input('category_id') : [],
        is_array($request->input('subcategory_id')) ? $request->input('subcategory_id') : [],
        is_array($request->input('subsubcategory_id')) ? $request->input('subsubcategory_id') : []
      );

      $product = Product::findOrFail($id);
      $product->active = !is_null($request->input('active')) && $request->input('active') == 1 ? 1 : 0;
      $isSave = $product->update($request->all());
      $product->allCategories()->sync($ids);

      \Session::flash('class','success');
      \Session::flash('message','Product successfully saved.');

      if(!$isSave){
        \Session::flash('class','danger');
        \Session::flash('message','Product not saved.');
      }

      return redirect()->route('admin.product.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

}
