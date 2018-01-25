<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Models\ProductReview;

class ReviewController extends Controller
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
        $reviews = ProductReview::orderBy('created_at', 'DESC')->paginate(10);

        return view('product::admin.review.index', compact('reviews'));
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

        $review = ProductReview::findOrFail($id);
        $review->active = $active;


        if(!$review->save()) {
          return [
            'id' => $id,
            'error' => true,
            'message' => 'Review unsuccessfully updated!'
          ];
        }

        return [
          'id' => $id,
          'error' => false,
          'active' => $review->active ? 0 : 1,
          'text' => $review->active ? 'Active' : 'Inactive',
          'class' => $review->active ? 'm-badge--success' : 'm-badge--danger',
          'message' => 'Review successfully updated!'
        ];

    }
}
