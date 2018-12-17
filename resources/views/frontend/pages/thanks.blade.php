@extends('frontend.templates.message')

@section('page_content')

    <div class="message__header">
        <h1 class="h1">Спасибо за вашу заявку!</h1>
        <p>Мы получили вашу заявку и свяжемся с вами в ближайшее рабочее время</p>
    </div>
    <div class="message__btns">
        <a href="{{ route('home') }}" class="btn btn_color_red btn_size_xl">На сайт</a>
    </div>

@endsection