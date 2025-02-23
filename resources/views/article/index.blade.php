

<x-layout>
    <div class="all-articles-section min-vh-100 section-index">
        <!-- Header della sezione -->
        <div class="articles-header">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-8">
                        <h1 class="articles-title">
                            {{__('ui.indexTitle')}}
                            <span class="accent-line"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Griglia degli articoli -->
        <div class="articles-grid py-5">
            <div class="container-fluid px-4">
                <div class="row g-4">
                    @forelse ($articles as $article)
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="article-wrapper">
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
        </div>

        <!-- Paginazione -->
        <div class="presto-pagination d-flex justify-content-center mt-4">
            {{$articles->links()}}
        </div>
    </div>
</x-layout>