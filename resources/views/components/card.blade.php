



<div class="article-card card shadow-sm h-100">
    <div class="article-card-image position-relative">
        <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
             class="card-img-top article-card-img"
             alt="{{$article->title}}">
    </div>

    <div class="card-body d-flex flex-column p-3">
        <h5 class="article-card-title mb-2">{{$article->title}}</h5>

        @if($article->category)
            <a href="{{ route('article.byCategory', $article->category) }}"
               class="article-card-category text-decoration-none mb-2">
                <i class="fas fa-tag me-1"></i>
                {{__("ui." . $article->category->name)}}
            </a>
        @endif

        <div class="article-card-footer mt-auto pt-3">
            <div class="d-flex justify-content-between align-items-center">
                <span class="article-card-price">
                    <i class="fas fa-euro-sign me-1"></i>
                    {{$article->price}}
                </span>
                <a href="{{route('article.show', $article)}}"
                   class="article-card-button text-decoration-none">
                    {{__("ui.details")}}
                    <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>