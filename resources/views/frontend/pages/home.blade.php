@extends('frontend.templates.main')

@section('page_content')

    @include('frontend.pages.home.primary-screen')
    @include('frontend.pages.home.quiz')
    @include('frontend.pages.home.benefits')
    @include('frontend.pages.home.about')
    @include('frontend.pages.home.categories')
    @include('frontend.pages.home.credit')
    @include('frontend.pages.home.free_measuring')
    @include('frontend.pages.home.portfolio')

@endsection