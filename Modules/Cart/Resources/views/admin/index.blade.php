@extends('cart::layouts.master')

@section('content')
    <h1>Hello World Admin</h1>

    <p>
        This view is loaded from module: {!! config('cart.name') !!}
    </p>
@stop
