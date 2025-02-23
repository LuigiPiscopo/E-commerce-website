<x-layout>
    <div class="register-section min-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Header -->
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 text-center">
                    <h1 class="register-title">
                        {{__('ui.register')}}
                        <span class="accent-line"></span>
                    </h1>
                </div>
            </div>
            
            <!-- Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="register-card">
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">{{__('ui.userName')}}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Il tuo nome">
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="La tua email">
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Crea una password">
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label for="password_confirmation" class="form-label">{{__('ui.passConf')}}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Conferma la password">
                                </div>
                            </div>
                            
                            <button type="submit" class="register-button w-100">
                                <i class="fas fa-user-plus me-2"></i>
                                {{__('ui.register')}}
                            </button>
                            
                            <div class="login-prompt text-center mt-4">
                                <p class="mb-0">{{__('ui.haveAccount')}}</p>
                                <a href="{{ route('login') }}" class="login-link">
                                    {{__('ui.login')}}
                                    <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>