@extends('front.layouts.app')

@section('content')
<main class="page__main">
    <article class="news">
        <h1 class="title news__title">Новости</h1>
        @include('front.news.list')
    </article>
</main>
@endsection
