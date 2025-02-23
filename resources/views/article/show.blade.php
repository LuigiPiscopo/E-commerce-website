<x-layout>
    <div class="article-show-section">
        <div class="container py-5">
            <!-- Back Button -->
            <div class="row mb-4">
                <div class="col-12">
                    <a href="{{ route('article.index') }}" class="article-show-back">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{__('ui.tornaallaLista')}}
                    </a>
                </div>
            </div>

            <!-- Header -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="article-show-title">
                        {{$article->title}}
                        <span class="article-show-line"></span>
                    </h1>
                </div>
            </div>

            <!-- Content -->
            <div class="row g-4 justify-content-between">
                <!-- Gallery -->
                <div class="col-12 col-lg-6">
                    <div class="article-show-gallery">
                        @if ($article->images->count() > 0)
                        <div id="articleCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                @foreach ($article->images as $key => $image)
                                <button type="button"
                                data-bs-target="#articleCarousel"
                                data-bs-slide-to="{{ $key }}"
                                class="{{ $key === 0 ? 'active' : '' }}"
                                aria-label="Slide {{ $key + 1 }}">
                            </button>
                            @endforeach
                        </div>

                        <div class="carousel-inner">
                            @foreach ($article->images as $key => $image)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <img src="{{ $image->getUrl(300, 300) }}"
                                class="d-block w-100 rounded shadow"
                                alt="Immagine {{ $key + 1 }} - {{ $article->title }}">
                            </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#articleCarousel" data-bs-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                            <span class="visually-hidden">Precedente</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#articleCarousel" data-bs-slide="next">
                            <i class="fas fa-chevron-right"></i>
                            <span class="visually-hidden">Successivo</span>
                        </button>
                    </div>
                    @else
                    <img src="https://picsum.photos/300"
                    alt="Immagine placeholder"
                    class="d-block w-100">
                    @endif
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-12 col-lg-5">
                <div class="article-show-info">
                    <div class="article-show-header">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h2 class="article-show-product-title">{{$article->title}}</h2>
                            <div class="article-show-price">
                                <span class="article-show-currency">€</span>
                                <span class="article-show-amount">{{$article->price}}</span>
                            </div>
                        </div>
                        @if ($article->category)
                        <a href="{{ route('article.byCategory', $article->category) }}" class="article-show-category">
                            <i class="fas fa-tag me-1"></i>
                            {{__("ui." . $article->category->name)}}
                        </a>
                        @endif
                    </div>

                    <div class="article-show-description">
                        <h5 class="article-show-description-title">{{__("ui.descrizione")}}</h5>
                        <p class="article-show-description-text">{{$article->description}}</p>
                    </div>





                        <div class="article-show-actions">
                            <button class="article-show-contact">
                                <i class="fas fa-envelope me-2"></i>
                                {{__('ui.contact')}}
                            </button>
                            <button class="article-show-save">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>



