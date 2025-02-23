

<x-layout>
    <div class="header-byCategory">
        <!-- Header della sezione -->
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="title-wrapper-byCategory">
                        <h1 class="title-byCategory">
                            {{$category->name}}
                            <span class="title-underline-byCategory"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Griglia degli articoli -->
        <div class="content-byCategory">
            <div class="container-fluid px-4">
                @if($articles->count() > 0)
                <div class="row g-4">
                    @foreach($articles as $article)
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="card-wrapper-byCategory">
                            <x-card :article="$article" />
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="empty-byCategory">
                    <div class="empty-content-byCategory">
                        <i class="fas fa-box-open empty-icon-byCategory"></i>
                        <h3 class="empty-title-byCategory">{{__('ui.empyCat')}}</h3>
                        <p class="empty-description-byCategory">{{__('ui.noArticlesCat')}}</p>
                        @auth
                        <a href="{{route('article.create')}}" class="empty-button-byCategory">
                            <i class="fas fa-plus-circle me-2"></i>
                            {{__('ui.beFirst')}}
                        </a>
                        @endauth
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
 </x-layout>