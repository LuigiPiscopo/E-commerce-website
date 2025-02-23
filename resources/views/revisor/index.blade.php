{{-- <x-layout>
    @if (session()->has('message'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="alert-revisorIndex mt-3 revisor-message">
                    <div class="alert-content-revisorIndex">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="dashboard-revisorIndex">
        <div class="container-fluid py-5">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="header-revisorIndex">
                        <h1 class="title-revisorIndex">
                            {{ __('ui.dashboard') }}
                            <span class="accent-line"></span>
                        </h1>
                    </div>
                </div>
            </div>

            @if ($article_to_check)
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="content-wrapper-revisorIndex">
                        <div class="row g-4">
                            <div class="col-12 col-lg-6">
                                <div class="image-container-revisorIndex">
                                    @if ($article_to_check->images->count() > 0)
                                    <div id="revisorCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            @foreach ($article_to_check->images as $key => $image)
                                            <button type="button" data-bs-target="#revisorCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-label="Slide {{ $key + 1 }}">
                                            </button>
                                            @endforeach
                                        </div>

                                        <div class="carousel-inner">
                                            @foreach ($article_to_check->images as $key => $image)
                                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">

                                                <div class=" ps-3 d-flex">
                                                    <img src="{{ $image->getUrl(300, 300) }}" class="w-50" alt="Immagine {{ $key + 1 }} - {{ $article_to_check->title }}">
                                                    <div>
                                                        <h5>Labels</h5>
                                                        @if($image->labels)
                                                           @foreach($image->labels as $label)
                                                               #{{$label}},
                                                           @endforeach
                                                        @else
                                                        <p class="fst-italic">No Labels</p>
                                                        @endif
                                                        <div class="text-center mx-auto {{ $image->adult }}">

                                                        </div>

                                                        <div class="">Adult</div>
                                                        <div class="text-center mx-auto {{ $image->violence }}">

                                                        </div>

                                                        <div class="">Violence</div>



                                                        <div class="text-center mx-auto {{ $image->spoof }}">

                                                        </div>

                                                        <div class="">Spoof</div>
                                                        <div class="text-center mx-auto {{ $image->racy }}">

                                                        </div>

                                                        <div class="">Racy</div>



                                                        <div class="text-center mx-auto {{ $image->medical }}">

                                                        </div>

                                                        <div class="">Medical</div>
                                                    </div>


                                                </div>

                                            </div>



                                          @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#revisorCarousel" data-bs-slide="prev">
                                            <i class="fas fa-chevron-left"></i>
                                            <span class="visually-hidden">Precedente</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#revisorCarousel" data-bs-slide="next">
                                            <i class="fas fa-chevron-right"></i>
                                            <span class="visually-hidden">Successivo</span>
                                        </button>
                                    </div>



                                    @else
                                    <img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-fluid rounded shadow">
                                    @endif
                                </div>
                            </div>



                            <div class="col-12 col-lg-6">
                                <div class="details-card-revisorIndex">
                                    <div class="article-info-revisorIndex">
                                        <h2 class="article-title-revisorIndex">{{ $article_to_check->title }}</h2>
                                        <div class="author-revisorIndex">
                                            <i class="fas fa-user-edit me-2"></i>
                                            {{ $article_to_check->user->name }}
                                        </div>
                                        <div class="price-revisorIndex">€{{ $article_to_check->price }}</div>
                                        <div class="category-revisorIndex">
                                            <i class="fas fa-tag me-2"></i>
                                            {{ $article_to_check->category->name }}
                                        </div>
                                        <p class="description-revisorIndex">{{ $article_to_check->description }}</p>
                                    </div>

                                    <div class="actions-revisorIndex">
                                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button class="reject-btn-revisorIndex">
                                                <i class="fas fa-times me-2"></i> {{ __('ui.bottoneRifiuta') }}
                                            </button>
                                        </form>
                                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button class="accept-btn-revisorIndex">
                                                <i class="fas fa-check me-2"></i> {{ __('ui.bottoneAccetta') }}
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="empty-state-revisorIndex">
                <i class="fas fa-check-circle mb-4"></i>
                <h2>{{ __('ui.noArticleToReview') }}</h2>
                <a href="{{ route('homepage') }}" class="back-btn-revisorIndex">
                    <i class="fas fa-home me-2"></i>{{ __('ui.returnHome') }}
                </a>
            </div>
            @endif
        </div>
    </div>




</x-layout> --}}

<x-layout>
    @if (session()->has('message'))
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="alert-revisorIndex mt-3 revisor-message">
                        <div class="alert-content-revisorIndex">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="dashboard-revisorIndex">
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="header-revisorIndex">
                        <h1 class="title-revisorIndex">
                            {{ __('ui.dashboard') }}
                            <span class="accent-line"></span>
                        </h1>
                    </div>
                </div>
            </div>

            @if ($article_to_check)
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="content-wrapper-revisorIndex">
                            <div class="row g-4">
                                <div class="col-12 col-lg-7">
                                    <div class="image-container-revisorIndex">
                                        @if ($article_to_check->images->count() > 0)
                                            <div id="revisorCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($article_to_check->images as $key => $image)
                                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                            <div class="carousel-content">
                                                                <div class="carousel-image-container">
                                                                    <img src="{{ $image->getUrl(400, 300) }}" class="img-fluid rounded" alt="Immagine {{ $key + 1 }} - {{ $article_to_check->title }}">
                                                                </div>
                                                                <div class="labels-container">
                                                                    <div class="labels-section">
                                                                        <h5 class="labels-title">
                                                                            <i class="fas fa-tags me-2"></i>Labels
                                                                        </h5>
                                                                        <div class="labels-wrapper">
                                                                            @if($image->labels)
                                                                                @foreach($image->labels as $label)
                                                                                    <span class="label-badge">#{{$label}}</span>
                                                                                @endforeach
                                                                            @else
                                                                                <p class="no-labels">No Labels Available</p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="analysis-grid">
                                                                        <div class="analysis-item {{ $image->adult }}">
                                                                            <i class="fa-solid fa-hand mt-1"></i>
                                                                            <span>Adult</span>
                                                                        </div>
                                                                        <div class="analysis-item {{ $image->violence }}">
                                                                            <i class="fas fa-fist-raised mt-1"></i>
                                                                            <span>Violence</span>
                                                                        </div>
                                                                        <div class="analysis-item {{ $image->spoof }}">
                                                                            <i class="fas fa-theater-masks mt-1"></i>
                                                                            <span>Spoof</span>
                                                                        </div>
                                                                        <div class="analysis-item {{ $image->racy }}">
                                                                            <i class="fas fa-fire mt-1"></i>
                                                                            <span>Racy</span>
                                                                        </div>
                                                                        <div class="analysis-item {{ $image->medical }}">
                                                                            <i class="fas fa-clinic-medical mt-1"></i>
                                                                            <span>Medical</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="carousel-indicators">
                                                    @foreach ($article_to_check->images as $key => $image)
                                                        <button type="button" data-bs-target="#revisorCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
                                                    @endforeach
                                                </div>

                                                <button class="carousel-control-prev" type="button" data-bs-target="#revisorCarousel" data-bs-slide="prev">
                                                    <i class="fas fa-chevron-left"></i>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#revisorCarousel" data-bs-slide="next">
                                                    <i class="fas fa-chevron-right"></i>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        @else
                                            <img src="https://picsum.photos/300" alt="placeholder" class="img-fluid rounded shadow">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 col-lg-5">
                                    <div class="details-card-revisorIndex">
                                        <div class="article-info-revisorIndex">
                                            <h2 class="article-title-revisorIndex">{{ $article_to_check->title }}</h2>
                                            <div class="info-group">
                                                <div class="author-revisorIndex">
                                                    <i class="fas fa-user-edit me-2"></i>
                                                    {{ $article_to_check->user->name }}
                                                </div>
                                                <div class="price-revisorIndex">€{{ $article_to_check->price }}</div>
                                                <div class="category-revisorIndex">
                                                    <i class="fas fa-tag me-2"></i>
                                                    {{ $article_to_check->category->name }}
                                                </div>
                                            </div>
                                            <p class="description-revisorIndex">{{ $article_to_check->description }}</p>
                                        </div>
                                    </div>
                                    <div class="actions-revisorIndex">
                                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button class="reject-btn-revisorIndex">
                                                <i class="fas fa-times me-2"></i> {{ __('ui.bottoneRifiuta') }}
                                            </button>
                                        </form>
                                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button class="accept-btn-revisorIndex">
                                                <i class="fas fa-check me-2"></i> {{ __('ui.bottoneAccetta') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="empty-state-revisorIndex">
                    <i class="fas fa-check-circle mb-4"></i>
                    <h2>{{ __('ui.noArticleToReview') }}</h2>
                    <a href="{{ route('homepage') }}" class="back-btn-revisorIndex">
                        <i class="fas fa-home me-2"></i>{{ __('ui.returnHome') }}
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-layout>
