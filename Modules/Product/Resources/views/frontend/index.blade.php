@extends('product::layouts.master')

@section('content')
    <h1>Hello World Frontend</h1>

    <p>
        This view is loaded from module: {!! config('product.name') !!}
    </p>
@stop