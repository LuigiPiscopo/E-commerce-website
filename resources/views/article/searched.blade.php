

<x-layout>
    <div class="searched-section min-vh-100 section-searched">
        <!-- Header della sezione -->
        <div class="searched-header">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-8">
                        <h1 class="searched-title">
                            {{__('ui.resultSearched')}} "<span class="searched-query">{{ $query }}</span> "
                            <span class="searched-line"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Griglia degli articoli -->
        <div class="searched-grid py-5">
            <div class="container-fluid px-4">
                <div class="row g-4">
                    @forelse ($articles as $article)
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="searched-wrapper">
                            <x-card :article="$article" />
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="empty-searched text-center py-5">
                            <i class="fas fa-search mb-3 display-4"></i>
                            <h3>{{__('ui.noArticlesSearch')}}</h3>
                            <p class="text-muted">{{__('ui.trySearched')}}</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Paginazione -->
        <div class="pagination-searched d-flex justify-content-center">
            {{$articles->links()}}
        </div>
    </div>
 </x-layout>