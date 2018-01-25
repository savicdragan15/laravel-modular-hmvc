<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Models\ProductCategory;

class CategoryController extends Controller
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
        $categories = ProductCategory::where(['parent_id' => null, 'subparent_id' => null])->orderBy('order_num', 'ASC')->get();

        return view('product::admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
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
    public function edit()
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function active(Request $request, $id)
    {
        $active = $request->input('active');

        $category = ProductCategory::findOrFail($id);
        $category->active = $active;


        if(!$category->save()) {
          return [
            'id' => $id,
            'error' => true,
            'message' => 'Cateogry unsuccessfully updated!'
          ];
        }

        return [
          'id' => $id,
          'error' => false,
          'active' => $category->active ? 0 : 1,
          'text' => $category->active ? 'Active' : 'Inactive',
          'class' => $category->active ? 'm-badge--success' : 'm-badge--danger',
          'message' => 'Cateogry successfully updated!'
        ];

    }
}
