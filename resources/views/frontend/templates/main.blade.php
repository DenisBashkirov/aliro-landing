@extends('frontend.templates.document')

@section('template')

    @include('frontend.layouts.header')
    @include('frontend.layouts.nav')

    @yield('page_content')

@endsection