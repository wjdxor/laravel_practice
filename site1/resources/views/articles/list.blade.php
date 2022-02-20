@extends('app')

@section('title', '게시물 리스트')

@section('content')
    <section class="section-1 t-mt-4">
        <div class="t-container t-mx-auto t-px-4">
            <ul class="t-grid t-grid-cols-1 sm:t-grid-cols-2 lg:t-grid-cols-3 t-gap-4 ">
                @foreach ($articles as $article)
                    <li>
                        <div class="card">
                            <a href="{{ route('articles.show', $article->id) }}" class="t-block">
                                <img src="{{ $article->thumb_img_url }}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <a href="{{ route('articles.show', $article->id) }}"
                                    class="t-block card-title t-truncate">{{ $article->title }}</a>
                                <a href="{{ route('articles.show', $article->id) }}"
                                    class="t-block card-text t-mt-2 t-text-gray-500">
                                    <div class="multiline-truncate-3">
                                        {{ $article->body }}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection