<?php

namespace Modules\News\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\News\Entities\Models\NewsCategory;
use Modules\News\Http\Requests\CreateCategoryRequest;
use Modules\News\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
      $categories = NewsCategory::where(['parent_id' => null, 'subparent_id' => null])->orderBy('order_num', 'ASC')->get();

      return view('news::admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = NewsCategory::where(['parent_id' => null, 'subparent_id' => null])->get();

        return view('news::admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
      $category = NewsCategory::create($request->all());

      \Session::flash('class','success');
      \Session::flash('message','Cateogry successfully saved.');

      return redirect()->route('admin.newscategory.edit', $category->id);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('news::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
      $category = NewsCategory::findOrFail($id);
      $categories = NewsCategory::where(['parent_id' => null, 'subparent_id' => null])->orderBy('order_num', 'ASC')->get();

      return view('news::admin.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
      $category = NewsCategory::findOrFail($id);
      $category->update($request->all());

      return redirect()->route('admin.newscategory.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function reorder(Request $request)
    {
        $categories = NewsCategory::where(['parent_id' => null, 'subparent_id' => null])->orderBy('order_num', 'ASC')->get();
        $route = route('admin.newscategory.reorder');

        if(!is_null($request->input('parent_id'))) {
          $categories = NewsCategory::where('parent_id', $request->input('parent_id'))->orderBy('order_num', 'ASC')->get();
          $route = route('admin.newscategory.reorder').'?parent_id='.$request->input('parent_id');
        }

        if(!is_null($request->input('subparent_id'))) {
          $categories = NewsCategory::where('subparent_id', $request->input('subparent_id'))->orderBy('order_num', 'ASC')->get();
          $route = route('admin.newscategory.reorder').'?subparent_id='.$request->input('subparent_id');
        }

        return view('news::admin.category.reorder', compact('categories', 'route'));
    }

    public function postReorder(Request $request)
    {
        $ids = $request->input('ids');

        if(!empty($ids)) {

          foreach ($ids as $key => $id) {
             $category = NewsCategory::find($id);
             $category->order_num = $key+1;
             $category->save();
          }

        }

        return redirect(\URL::previous());
    }

    public function active(Request $request, $id)
    {
        $active = $request->input('active');

        $category = NewsCategory::findOrFail($id);
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
