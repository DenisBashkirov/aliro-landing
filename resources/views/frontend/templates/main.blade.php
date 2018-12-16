@extends('frontend.templates.document')

@section('template')

    @include('frontend.layouts.header')

    @yield('page_content')

    @include('frontend.layouts.header')

@endsection