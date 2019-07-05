@extends('layouts.main')

@section('meta')
    <title>LuzBakery</title>
@stop()

@section('content')
    
    @include('frontend.slide.index')

    @include('frontend.productSelling.listProduct')
@stop()
