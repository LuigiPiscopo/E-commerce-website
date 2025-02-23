<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories= [
        'elettronica', 
        'abbigliamento',
        'salute e bellezza',
        'case e giardinaggio',
        'giocattoli',
        'sport',
        'animali domestici',
        'libri e riviste',
        'accessori',
        'motori'

    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach($this->categories as $category){
            Category::create([
                'name'=>$category
            ]);
        }
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
