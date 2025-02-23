<x-layout>
   <div class="login-section min-vh-100 d-flex align-items-center">
       <div class="container">
           <!-- Header -->
           <div class="row justify-content-center mb-5">
               <div class="col-12 col-md-6 text-center">
                   <h1 class="login-title">
                       {{__('ui.login')}}
                       <span class="accent-line"></span>
                   </h1>
               </div>
           </div>

           <!-- Form -->
           <div class="row justify-content-center">
               <div class="col-12 col-md-5 col-lg-4">
                   <div class="login-card">
                       <form method="POST" action="{{ route('login') }}">
                           @csrf
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
                                   <input type="password" class="form-control" id="password" name="password" placeholder="La tua password">
                               </div>
                           </div>

                           <div class="form-check mb-4">
                               <input type="checkbox" class="form-check-input" id="remember" name="remember">
                               <label class="form-check-label" for="remember">{{__('ui.rememberMe')}}</label>
                           </div>

                           <button type="submit" class="login-button w-100">
                               <i class="fas fa-sign-in-alt me-2"></i>
                               {{__('ui.login')}}
                           </button>

                           <div class="register-prompt text-center mt-4">
                               <p class="mb-0">{{__('ui.notHaveAccount')}}</p>
                               <a href="{{ route('register') }}" class="register-link">
                                {{__('ui.register')}}
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