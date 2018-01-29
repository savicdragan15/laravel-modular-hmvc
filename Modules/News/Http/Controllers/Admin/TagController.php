<?php

namespace Modules\News\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\News\Entities\Models\NewsTag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $tags = NewsTag::all();

        return view('news::admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('news::create');
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
        return view('news::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('news::edit');
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

        $tag = NewsTag::findOrFail($id);
        $tag->active = $active;


        if(!$tag->save()) {
          return [
            'id' => $id,
            'error' => true,
            'message' => 'Tag unsuccessfully updated!'
          ];
        }

        return [
          'id' => $id,
          'error' => false,
          'active' => $tag->active ? 0 : 1,
          'text' => $tag->active ? 'Active' : 'Inactive',
          'class' => $tag->active ? 'm-badge--success' : 'm-badge--danger',
          'message' => 'Tag successfully updated!'
        ];

    }
}
