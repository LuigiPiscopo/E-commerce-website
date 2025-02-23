

 <div class="bg-createForm py-5">
    @if (session()->has('message'))
    <div class="alert-revisorIndex mt-3">
        <div class="alert-content-revisorIndex">
            {{session('message')}}
        </div>
    </div>
    @endif

    <div class="container-createArtForm">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="form-wrapper-createArtForm">
                    <h1 class="title-createArtForm">{{__("ui.inserisciArticolo")}}</h1>
                    <div class="title-underline-createArtForm"></div>

                    <form wire:submit.prevent="save">
                        @csrf
                        <div class="input-group-createArtForm">
                            <label for="title" class="form-label-createArtForm">{{__("ui.titolo")}}</label>
                            <div class="input-wrapper-createArtForm">
                                <i class="fas fa-tag icon-createArtForm"></i>
                                <input type="text" id="title" wire:model.blur="title" placeholder="{{__("ui.inserisciTitolo")}}">
                            </div>
                            @error('title')
                            <p class="error-message-createArtForm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="input-group-createArtForm">
                            <label for="price" class="form-label-createArtForm">{{__("ui.prezzo")}}</label>
                            <div class="input-wrapper-createArtForm">
                                <i class="fas fa-euro-sign icon-createArtForm"></i>
                                <input type="number" id="price" wire:model.blur="price" placeholder="{{__("ui.inserisciPrezzo")}}">
                            </div>
                            @error('price')
                            <p class="error-message-createArtForm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="input-group-createArtForm">
                            <label for="description" class="form-label-createArtForm">{{__("ui.descrizione")}}</label>
                            <div class="input-wrapper-createArtForm">
                                <i class="fas fa-align-left icon-createArtForm"></i>
                                <textarea id="description" wire:model.blur="description" placeholder="{{__("ui.inserisciDescrizione")}}" class="textareaCreateArtForm"></textarea>
                            </div>
                            @error('description')
                            <p class="error-message-createArtForm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="input-group-createArtForm">
                            <label for="category" class="form-label-createArtForm">{{__("ui.categoria")}}</label>
                            <div class="input-wrapper-createArtForm">
                                <i class="fas fa-list icon-createArtForm"></i>
                                <select id="category" wire:model.blur="category">
                                    <option value="" disabled selected>{{__("ui.scegliCategoria")}}</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category')
                            <p class="error-message-createArtForm">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Sezione Upload Immagini -->
                        <div class="input-group-createArtForm">
                            <label class="form-label-createArtForm">{{__("ui.immagine")}}</label>
                            <div class="image-upload-wrapper">
                                <div class="input-wrapper-createArtForm mb-2">
                                    <i class="fas fa-images icon-createArtForm"></i>
                                    <input type="file"
                                           wire:model.live="temporary_images"
                                           multiple
                                           class="form-control @error('temporary_images.*') is-invalid @enderror"
                                           placeholder="Img/">
                                </div>

                                @error('temporary_images.*')
                                <p class="error-message-createArtForm">{{$message}}</p>
                                @enderror
                                @error('temporary_images')
                                <p class="error-message-createArtForm">{{$message}}</p>
                                @enderror

                                <!-- Preview Immagini -->
                                @if(!empty($images))
                                <div class="images-preview-section mt-3">
                                    <h6 class="preview-title mb-2">{{__("ui.anteprimaFoto")}}:</h6>
                                    <div class="image-preview-grid">
                                        @foreach($images as $key => $image)
                                        <div class="preview-item">
                                            <div class="preview-image"
                                                 style="background-image: url({{ $image->temporaryUrl() }});">
                                            </div>
                                            <button type="button"
                                                    class="preview-remove-btn"
                                                    wire:click="removeImage({{ $key }})">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="submit-button-createArtForm">
                            <i class="fas fa-plus-circle"></i>
                            <span>{{__('ui.addArticle')}}</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>