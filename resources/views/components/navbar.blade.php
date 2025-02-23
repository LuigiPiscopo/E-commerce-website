

<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid fluid-navbar">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="/media/logoPresto.png" alt="Logo Presto" height="70" width="50" class="me-2">
    </a>
    <!-- Toggler - Posizionato a destra -->
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <!-- Contenuto del collapse - Nascosto di default -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item nav-space">
          <a class="nav-link" href="/"><i class="fas fa-home me-1"></i> Home</a>
        </li>
        <li class="nav-item nav-space">
          <a class="nav-link" href="{{route('article.index')}}">
            <i class="fas fa-shopping-bag me-1"></i>{{__('ui.allArticles')}}
          </a>
        </li>
        <li class="nav-item nav-space">
          @auth
          <a class="nav-link" href="{{route('article.create')}}">
            <i class="fas fa-plus-circle me-1"></i>{{__('ui.addArticle')}}
          </a>
          @else
          <a class="nav-link" href="{{route('login')}}">
            <i class="fas fa-plus-circle me-1"></i>{{__('ui.addArticle')}}
          </a>
          @endauth
        </li>
        <li class="nav-item nav-space dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-th-list me-1"></i>{{__('ui.categories')}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end animate slideIn">
            @foreach ($categories as $category)
            <li>
              <a href="{{route('article.byCategory', ['category'=>$category])}}" class="dropdown-item text-capitalize">
                <i class="fas fa-tag me-2"></i>{{__("ui.$category->name")}}
              </a>
            </li>
            @if (!$loop->last)
            <hr class="dropdown-divider">
            @endif
            @endforeach
          </ul>
        </li>
        @auth
        @if (Auth::user()->is_revisor)
        <li class="nav-item nav-space">
          <a class="nav-link revisor-link" href="{{route('revisor.index')}}">
            <i class="fas fa-check-circle me-1"></i>
            {{__('ui.zonaRevisore')}}
            <span class="notification-badge">{{\App\Models\Article::toBeRevisedCount()}}</span>
          </a>
        </li>
        @endif
        @endauth
        @auth
        <li class="nav-item nav-space dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <i class="fas fa-user-circle me-1"></i>{{__("ui.utenteLoggato", ['name'=>Auth::user()->name])}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end animate slideIn">
            <li>
              <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                <i class="fas fa-sign-out-alt me-2"></i>{{__('ui.logout')}}
              </a>
            </li>
            <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
          </ul>
        </li>
        @else
        <li class="nav-item nav-space dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <i class="fas fa-user me-1"></i>{{__('ui.helloUser')}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end animate slideIn">
            <li>
              <a class="dropdown-item" href="{{route('login')}}">
                <i class="fas fa-sign-in-alt me-2"></i>{{__('ui.login')}}
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="{{route('register')}}">
                <i class="fas fa-user-plus me-2"></i>{{__('ui.register')}}
              </a>
            </li>
          </ul>
        </li>
        @endauth
      </ul>

      <div class="language-switcher dropdown">
        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-globe"></i>
          {{ strtoupper(app()->getLocale()) }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end animate slideIn">
          <li><x-_locale lang="it"/></li>
          <li><x-_locale lang="en"/></li>
          <li><x-_locale lang="es"/></li>
        </ul>
      </div>

      <form class="d-flex ms-auto search-form" role="search" action="{{route('article.search')}}" method="GET">
        <div class="search-wrapper">
          <i class="fas fa-search search-icon"></i>
          <input type="search" name="query" class="search-input" placeholder="{{__('ui.cercaArticoli')}}" aria-label="search">
          <button type="submit" class="search-button">
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</nav>