<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Models\Product;
use Modules\Product\Entities\Models\ProductImage;

class ImageController extends Controller
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
        //return view('product::admin.image.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

      ProductImage::create([
        'name' => $request->input('name'),
        'product_id' => $request->input('product_id')
      ]);

      return 'true';
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($product_id)
    {
        $product = Product::findOrFail($product_id);

        return view('product::admin.image.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
      //dd($request->all());
       $images_ids = $request->input('ids');

       foreach($images_ids as $key => $id) {
          $image = ProductImage::find($id);

          $image->update([
            'order_num' => $key+1
          ]);
       }

       return redirect()->route('admin.productimage.edit', $request->input('product_id'));

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
      $image = ProductImage::findOrFail($id);
      $image->delete();

      return [
        'id' => $id,
        'error' => false,
        'message' => 'Image successfully deleted!'
      ];

    }

    public function active(Request $request)
    {
        //return $request->all();
        $id = $request->input('id');
        $active = $request->input('value');

        $image = ProductImage::findOrFail($id);
        $image->active = $active;


        if(!$image->save()) {
          return [
            'id' => $id,
            'error' => true,
            'message' => 'Image unsuccessfully updated!'
          ];
        }

        return [
          'id' => $id,
          'error' => false,
          'active' => $image->active ? 0 : 1,
          'message' => 'Image successfully updated!'
        ];

    }
}
