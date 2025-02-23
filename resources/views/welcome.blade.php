

<x-layout>

    <header class="hero-section position-relative">
        <!-- Overlay scuro sopra l'immagine di sfondo -->
        <div class="overlay mt-5">
            @if (session()->has('errorMessage'))
            <div class="row justify-content-center">
                <div class="col-5 alert-revisorIndex">
                    {{session('errorMessage')}}
                </div>
            </div>
            @endif

            @if (session()->has('message'))
               <div class="row justify-content-center">
                   <div class="col-5 alert-content-revisorIndex">
                {{session('message')}}
                  </div>
              </div>
           @endif
        </div>

        <div class="container-fluid">
            <div class="row min-vh-100 justify-content-center align-items-center hero-content">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="main-title mb-4 tracking-in-contract">PRESTO.IT</h1>
                    <p class="lead text-white mb-5 tracking-in-contract">{{__('ui.subTitle')}}</p>
                    <a href="{{route('article.create')}}" class="custom-button text-decoration-none text-flicker-in-glow scale-in-hor-center">
                        <i class="fas fa-plus-circle me-2"></i>{{__('ui.addArticle')}}
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Sezione articoli -->
    <section class="articles-section py-5">
        <div class="container-fluid">
            <h3 class="section-title mb-4 text-center position-relative">
                {{__('ui.latestAdded')}}<span class="accent-line"></span>
            </h3>
            <div class="row g-4 my-3">
                @forelse ($articles as $article)
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="article-card-wrapper">
                        <x-card :article="$article" />
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="empty-state text-center py-5">
                        <i class="fas fa-box-open mb-3 display-4"></i>
                        <h3>{{__('ui.noArticles')}}</h3>
                        <p class="text-muted">{{__('ui.beFirst')}}</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
