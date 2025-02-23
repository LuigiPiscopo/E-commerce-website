<x-layout>
    @auth
        <div class="container-RevisorForm">
            <div class="form-wrapper-RevisorForm">
                <h1 class="title-RevisorForm">
                    {{__('ui.become')}}
                    <div class="title-underline-RevisorForm"></div>
                </h1>

                <form method="POST" action="{{ route('become.revisor') }}">
                    @csrf

                    <div class="input-group-RevisorForm">
                        <label class="label-RevisorForm">{{__('ui.name')}}</label>
                        <div class="input-wrapper-RevisorForm">
                            <i class="fas fa-user icon-RevisorForm"></i>
                            <input type="text" name="name" placeholder="Il tuo nome" value="{{ Auth::user()->name }}"
                                readonly>
                        </div>
                    </div>

                    <div class="input-group-RevisorForm">
                        <label class="label-RevisorForm">{{__('ui.surname')}}</label>
                        <div class="input-wrapper-RevisorForm">
                            <i class="fas fa-user icon-RevisorForm"></i>
                            <input type="text" name="surname" placeholder="Il tuo cognome" required>
                        </div>
                    </div>

                    <div class="input-group-RevisorForm">
                        <label class="label-RevisorForm">Email</label>
                        <div class="input-wrapper-RevisorForm">
                            <i class="fas fa-envelope icon-RevisorForm"></i>
                            <input type="email" name="email" placeholder="La tua email"
                                value="{{ Auth::user()->email }}" readonly>
                        </div>
                    </div>

                    <button type="submit" class="submit-button-RevisorForm">
                        <i class="fas fa-user-plus"></i>
                        {{__('ui.become')}}
                    </button>
                </form>
            </div>
        </div>
    @else
        <script>
            window.location = "{{ route('login') }}";
        </script>
    @endauth
</x-layout>
