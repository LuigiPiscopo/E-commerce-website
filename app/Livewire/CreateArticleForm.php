<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:5|max:30')]
    public $title;

    #[Validate('required|min:10|max:1000')]
    public $description;

    #[Validate('required|numeric')]
    public $price;

    #[Validate('required')]
    public $category = '';

    public $images = [];
    public $temporary_images;
    public $article;



    public function save()
    {

        $validated = $this->validate();



        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);


        if (count($this->images) > 0) {
            foreach ($this->images as $image) {

                $newFileName = "articles/{$this->article->id}";


                $newImage = $this->article->images()->create([
                    'path' => $image->store($newFileName, 'public')]);

                // dispatch(new ResizeImage($newImage->path, 300, 300));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));

                // dispatch(new GoogleVisionLabelImage($newImage->id));

                // $removeFaces = new RemoveFaces($newImage->id);

                // RemoveFaces::withChain([
                Bus::chain(
                    [
                        new RemoveFaces($newImage->id),
                        new ResizeImage($newImage->path, 300, 300),
                        new GoogleVisionSafeSearch($newImage->id),
                        new GoogleVisionLabelImage($newImage->id)

                    ]
                )->dispatch();
                // ])->dispatch($newImage->id);
            }


            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        $message ="";
        if(app()->getLocale()=='en'){
            $message='Article inserted correctly';
        }elseif(app()->getLocale()=='it'){
            $message ='Articolo inserito correttamente';
        }else{
           $message='Has aceptado el artículo';
        }
        session()->flash('message', $message);


        $this->cleanForm();
    }


    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }


    public function messages()
    {
        return [
            'required' => 'Campo obbligatorio',
            'min' => 'Il campo deve avere almeno :min caratteri',
            'max' => 'Il campo deve avere al massimo :max caratteri',
        ];
    }


    public function render()
    {
        return view('livewire.create-article-form', [
            'categories' => Category::all()
        ]);
    }


    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }


    public function removeImage($key)
    {
        if (isset($this->images[$key])) {
            unset($this->images[$key]);
            $this->images = array_values($this->images);
        }
    }
}
