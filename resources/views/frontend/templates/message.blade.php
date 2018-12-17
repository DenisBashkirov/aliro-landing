@extends('frontend.templates.document')

@section('template')

    <div class="message">
        <div class="message__container container">
            @yield('page_content')
        </div>
    </div>

@endsection