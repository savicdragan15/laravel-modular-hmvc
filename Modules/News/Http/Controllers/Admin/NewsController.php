<?php

namespace Modules\News\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\News\Http\Requests\CreateArticleRequest;
use Modules\News\Http\Requests\UpdateArticleRequest;
use Modules\News\Entities\Models\News;
use Modules\News\Entities\Models\NewsCategory;

class NewsController extends Controller
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
        $articles = News::orderBy('created_at', 'DESC')->paginate(10);

        return view('news::admin.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = NewsCategory::where(['parent_id' => null, 'subparent_id' => null])->get();

        return view('news::admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CreateArticleRequest $request)
    {

      $ids = array_merge(
        is_array($request->input('category_id')) ? $request->input('category_id') : [],
        is_array($request->input('subcategory_id')) ? $request->input('subcategory_id') : [],
        is_array($request->input('subsubcategory_id')) ? $request->input('subsubcategory_id') : []
      );

      $request->request->add(['author_id' => \Auth::user()->id]);
      $article = News::create($request->all());
      $article->allCategories()->sync($ids);

      \Session::flash('class','success');
      \Session::flash('message','Article successfully saved.');

      return redirect()->route('admin.news.edit', $article->id);

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        dd('show');
        return view('news::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $article = News::findOrFail($id);
        $categories = NewsCategory::where(['parent_id' => null, 'subparent_id' => null])->get();

        return view('news::admin.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {

      $ids = array_merge(
        is_array($request->input('category_id')) ? $request->input('category_id') : [],
        is_array($request->input('subcategory_id')) ? $request->input('subcategory_id') : [],
        is_array($request->input('subsubcategory_id')) ? $request->input('subsubcategory_id') : []
      );

      $article = News::findOrFail($id);
      $article->active = !is_null($request->input('active')) && $request->input('active') == 1 ? 1 : 0;
      $article->featured = !is_null($request->input('featured')) && $request->input('featured') == 1 ? 1 : 0;
      $isSave = $article->update($request->all());
      $article->allCategories()->sync($ids);

      \Session::flash('class', 'success');
      \Session::flash('message', 'Article successfully saved.');

      if(!$isSave){
        \Session::flash('class', 'danger');
        \Session::flash('message', 'Article not saved.');
      }

      return redirect()->route('admin.news.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

}
